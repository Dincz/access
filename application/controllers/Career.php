<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Career extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(['form_validation', 'upload', 'email']);
        $this->load->helper(['url', 'form']);
    }

    public function index()
    {
        $this->load->view('frontend/career');
    }

    public function email()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            if ($this->input->post('honeypot')) {
                die("Bot detected! Submission blocked.");
            }

            $recaptchaResponse = $this->input->post('recaptcha_response', TRUE);

            if ($this->verifyRecaptcha($recaptchaResponse)) {
                // Form validation
                $this->form_validation->set_rules('fullName', 'Full Name', 'trim|required');
                $this->form_validation->set_rules('job_type', 'Job Type', 'trim|required');
                $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
                $this->form_validation->set_rules('contactNumber', 'Phone Number', 'trim|required');

                if ($this->form_validation->run() === FALSE) {
                    $this->load->view('frontend/career');
                    return;
                }

                // File upload configuration
                $config['upload_path']   = './assets/pdfs/';
                $config['allowed_types'] = 'pdf|doc|docx';
                $config['max_size']      = 2048; // 2MB limit
                $this->upload->initialize($config);

                $resume_file_path = '';
                if (!empty($_FILES['resume']['name'])) {
                    if (!$this->upload->do_upload('resume')) {
                        echo $this->upload->display_errors();
                        return;
                    }
                    $upload_data      = $this->upload->data();
                    $resume_file_path = base_url('assets/pdfs/') . $upload_data['file_name'];
                }

                // Email content
                $to = [["email" => "tanaya@crezvatic.com", "name" => "Tanaya Kadam"]];
                $subject = 'New Job Application | ' . $this->input->post('job_role', TRUE);
                $message = '
                <html>
                <head>
                    <title>' . $subject . '</title>
                    <style>
                        body { 
                            font-family: Arial, sans-serif; 
                            font-size: 0.875rem; ; 
                            line-height: 1.6; 
                            color: #333; 
                            background-color: #f8f9fa; 
                            padding: 20px; 
                        }
                        .container {
                            max-width: 600px;
                            margin: auto;
                            background: #fff;
                            padding: 20px;
                            border-radius: 10px;
                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                        }
                        .email-header {
                            font-size: 1.25rem;
                            font-weight: bold;
                            color: #2c3e50;
                            margin-bottom: 15px;
                            text-align: center;
                        }
                        .email-section {
                            margin-bottom: 10px;
                            padding: 10px;
                            border-bottom: 1px solid #ddd;
                        }
                        .email-section:last-child {
                            border-bottom: none;
                        }
                        .label {
                            font-weight: bold;
                            color: #555;
                        }
                        .resume-button {
                            display: inline-block;
                            background: #000;
                            color: #ffffff;
                            padding: 10px 15px;
                            text-decoration: none;
                            font-size: 0.875rem; ;
                            border-radius: 10px;
                            font-weight: bold;
                            margin-top: 10px;
                        }
                        .resume-button:hover {
                            background: #222;
                        }
                    </style>
                </head>
                <body>
                    <div class="container">
                        <div class="email-header">New Job Application</div>
                        <div class="email-section"><span class="label">Name:</span> ' . htmlspecialchars($this->input->post('fullName', TRUE)) . '</div>
                        <div class="email-section"><span class="label">Job Type:</span> ' . htmlspecialchars($this->input->post('job_type', TRUE)) . '</div>
                        <div class="email-section"><span class="label">Job Type:</span> ' . htmlspecialchars($this->input->post('job_role', TRUE)) . '</div>
                        <div class="email-section"><span class="label">Email:</span> ' . htmlspecialchars($this->input->post('email', TRUE)) . '</div>
                        <div class="email-section"><span class="label">Phone Number:</span> ' . htmlspecialchars($this->input->post('contactNumber', TRUE)) . '</div>';

                if (!empty($resume_file_path)) {
                    $message .= '<div class="email-section">
                                    <span class="label">Resume:</span> 
                                    <a href="' . $resume_file_path . '" target="_blank" class="resume-button">Download Resume</a>
                                </div>';
                }

                if ($this->input->post('message', TRUE)) {
                    $message .= '<div class="email-section">
                                    <span class="label">Message:</span> ' . htmlspecialchars($this->input->post('message', TRUE)) . '
                                </div>';
                }

                $message .= '
                    </div>
                </body>
                </html>';


                // Attach resume if available
                if (!empty($resume_file_path)) {
                    $pdf_url = './assets/pdfs/' . $upload_data['file_name'];
                } else {
                    $pdf = null;
                }
                // print_r($message);exit;
                // Send email
                if ($this->brevoMailSendAPI($to, $subject, $message, $pdf)) {
                    redirect('https://crezvatic.com/thankyou?apply=job');
                } else {
                    echo "Error sending email";
                }
            } else {
                echo "reCAPTCHA verification failed. Please try again.";
            }
        } else {
            echo "Invalid request.";
        }
    }

    private function verifyRecaptcha($recaptchaResponse)
    {
        $secretKey = CAPCTHA_SECRET_KEY;
        $url       = "https://www.google.com/recaptcha/api/siteverify";

        $postData = [
            'secret'   => $secretKey,
            'response' => $recaptchaResponse
        ];

        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL            => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => http_build_query($postData),
            CURLOPT_HTTPHEADER     => ["Content-Type: application/x-www-form-urlencoded"]
        ]);

        $response = curl_exec($ch);
        $error    = curl_error($ch);
        curl_close($ch);

        if ($error) {
            error_log("reCAPTCHA cURL Error: " . $error);
            return false;
        }

        $result = json_decode($response, true);
        return isset($result['success']) && $result['success'] === true;
    }

    // Brevo API integration
    private function brevoMailSendAPI($to, $subject, $message, $pdf_url = null)
    {
        $curl = curl_init();

        $payload = [
            "sender" => [
                "name" => "Crezvatic Pvt Ltd",
                "email" => "jobs@crezvatic.com"
            ],
            "to" => $to,
            "subject" => $subject,
            "htmlContent" => $message
        ];

        // Add attachment if PDF URL is provided
        if ($pdf_url) {
            // Get the PDF content
            $pdf_content = file_get_contents($pdf_url);
            if ($pdf_content !== false) {
                $payload["attachment"] = [
                    [
                        "name" => basename($pdf_url),
                        "content" => base64_encode($pdf_content)
                    ]
                ];
            }
        }

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.brevo.com/v3/smtp/email",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($payload),
            CURLOPT_HTTPHEADER => [
                "accept: application/json",
                "api-key: " . BREVO_API_KEY,
                "content-type: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            log_message('error', 'Brevo API Error: ' . $err);
            return false;
        }

        $result = json_decode($response, true);
        return isset($result['messageId']);
    }
}

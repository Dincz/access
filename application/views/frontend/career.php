<!-- header start  -->
<?php

use function PHPSTORM_META\type;

$this->load->view('layout/header'); ?>
<!-- end  -->



<div id="aboutUsSection" class="careerSection main-section ">
    <div class="hero_section pb-0 px-0" style="background: linear-gradient(180deg, rgba(78, 4, 47, 1) 0%, rgba(1, 1, 1, 1) 70%);">
        <p class="scrollTrigger text-center careetAtCont"><span class="carerAtCrez position-relative">CAREER AT CREZVATIC</span></p>
        <h2 class="scrollTrigger text-center fs-1 py-1 heroHeading">Dare To Dream Bigger ? Welcome Aboard! 🚀</h2>
        <!-- <h2 class="scrollTrigger text-center fs-1 py-1">Welcome Aboard! 🚀</h2> -->
        <div class="py-2 roleButtonCont scrollTrigger d-flex flex-row flex-nowrap justify-content-center align-items-items-center">
            <a href="#all_roles" class="openRoleBtn px-4 py-2 mt-3">See open roles</a>
        </div>
        <!-- <h1 class="">About Us</h1> -->
        <div class="mumbaiBgImg">
            <img class="deskMumbai" src="<?php echo asset_url() ?>images/career/mumbaiskyline [Converted]- 1.png" alt="">
            <img class="mobileMumbai " src="<?php echo asset_url() ?>images/career/mumbaiskyline [Converted]- mb.png" alt="">
        </div>
    </div>

    <!-- hero section  -->
    <div class="hero_section_1 abtSect d-flex flex-wrap-reverse mb-5 ">
        <div class="left text-center d-flex flex-column align-items-center justify-content-center col-12">
            <h2 class="scrollTrigger fs-2">A Little bit about our company</h2>
            <p class="scrollTrigger ">Crez means growth and vatic (Sanskrit) means prediction. Crezvatic is a Results and ROI driven full fledged Digital/ Internet Marketing Agency. Along with 15 Years of experience in contact center sales and support in Mumbai, India. Powering digital dreams & building the future for many businesses across the globe digitally.
            </p>
            <a class="scrollTrigger rounded-3 openRoleBtn border mt-3" href="<?php echo base_url(); ?>digital-markting-consultant-near-me">Know More</a>
        </div>
    </div>

    <!-- WHY join us section -->
    <div id="approach_section"
        class="approach-section d-flex flex-column align-items-center justify-content-center container py-3 mt-3">
        <div class="heading w-100 text-center scrollTrigger">
            <h2 >Why Join Us</h2>
        </div>
        <div class="content row justify-content-evenly align-items-start py-5 gap-5">
            <div class="col-12 col-md-4 scrollTrigger box d-flex flex-column justify-content-center align-items-start gap-3">
                <span>1</span>
                <div class="icon">
                    <img src="<?php echo asset_url() ?>images/career/growth 1.png" alt="icons">
                </div>
                <h3 class="m-0 whyUsTitle ">Growth-Oriented Culture</h3>
                <p class="text-white fst-italic">"Your Success = Our Mission!"</p>
                <p class="m-0">
                    We send you a list of basic questionnaires to understand your business goals, needs, wants & Pain
                    points. Here we also understand the client's vision & mission for the online marketing world</p>
            </div>
            <div class="col-12 col-md-4 scrollTrigger box d-flex flex-column justify-content-center align-items-start gap-3">
                <span>2</span>
                <div class="icon">
                    <img src="<?php echo asset_url() ?>images/career/balance 1.png" alt="icons">
                </div>
                <h3 class="m-0 whyUsTitle">Work-Life Balance</h3>
                <p class="text-white fst-italic">"Work Smart, Live Fully!"</p>
                <p class="m-0">
                    Enjoy flexible work schedules, hybrid/remote options, and a fun, stress-free environment.</p>
            </div>
            <div class="col-12 col-md-4 scrollTrigger box d-flex flex-column justify-content-center align-items-start gap-3">
                <span>3</span>
                <div class="icon">
                    <img src="<?php echo asset_url() ?>images/career/loyalty-program 1.png" alt="icons">
                </div>
                <h3 class="m-0 whyUsTitle">Competitive Perks & Rewards</h3>
                <p class="text-white fst-italic">"Hard Work Pays Off!"</p>
                <p class="m-0">
                    Get rewarded with performance-based incentives, bonuses, and well-deserved recognition.</p>
            </div>
            <div class="col-12 col-md-4 scrollTrigger box d-flex flex-column justify-content-center align-items-start gap-3">
                <span>4</span>
                <div class="icon">
                    <img src="<?php echo asset_url() ?>images/career/collaboration 1.png" alt="icons">
                </div>
                <h3 class="m-0 whyUsTitle">Innovative & Collaborative Team</h3>
                <p class="text-white fst-italic">"Create, Innovate, Succeed!"</p>
                <p class="m-0">
                    Join a team of experts, share ideas, and work in a creative and open environment.</p>
            </div>

            <div class="box"></div>
        </div>
    </div>

    <!-- open role section  -->
    <?php
    // Define the array with job roles
    $roles = [
        // [
        //     'title' => 'PHP Developer',
        //     'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt sit officia atque? Laboriosam nihil quibusdam nisi necessitatibus odit magni facere veritatis alias aspernatur obcaecati in, placeat rem nam est sequi aliquid vero natus quas nemo? Nesciunt veritatis sint saepe, quasi impedit hic tenetur nostrum ipsum, enim fuga fugit beatae nihil sapiente, debitis cum delectus adipisci aliquam voluptatem eum itaque eaque harum vel? Nobis facere consectetur quas soluta architecto repellendus, quidem nulla praesentium impedit pariatur laudantium adipisci! Maxime accusamus in qui doloribus alias sit error blanditiis esse accusantium cumque harum cum ipsum, perferendis porro excepturi, deserunt aspernatur nemo sequi amet recusandae!',
        //     'department' => 'Development',
        //     'read_more_url' => '#',
        //     'apply_now_url' => '#',
        // ],
        [
            'title' => 'Video Editor Cum Motion Graphic Designer',
            'department' => 'Graphics',
            'description' => '<p>We are looking for a Motion Graphic Designer / Graphic Designer/ Editor to create engaging and on-brand graphics for a variety of media.<ul><li>Conceptualizing visuals based on requirements</li><li>Creating images and layouts by hand or using design software</li><li>Testing graphics across various media</li></ul></p>',
            'responsibilities' => '<ul><li>Study design briefs and determine requirements</li><li>Schedule projects and define budget constraints</li><li>Conceptualize visuals based on requirements</li><li>Prepare rough drafts and present ideas</li><li>Develop illustrations, logos and other designs using software or by hand</li><li>Use the appropriate colors and layouts for each graphic</li><li>Work with copywriters and marketers to produce final design</li><li>Test graphics across various media</li><li>Amend designs after feedback</li><li>Ensure final graphics and layouts are visually appealing and on-brand</li></ul>',
            'read_more_url' => '#',
            'apply_now_url' => '#',
        ],
        [
            'title' => 'Paid Marketing Specialist ( Google, Meta, Linkedin )',
            'department' => 'Paid marketing',
            'description' => '<p>We are seeking a motivated and experienced Google &amp; Facebook Ads Specialist to join our digital marketing agency. The successful candidate will be responsible for managing, optimizing, and scaling our clients&#39; Google and Facebook ad campaigns. The ideal candidate should have a strong understanding of digital marketing, be analytical, and possess excellent communication skills.</p>',
            'responsibilities:' => '<ul><li>Strategy Development: Collaborate with the marketing team and clients to develop advertising strategies aligned with business goals and target audience.</li><li>Campaign Planning: Conduct thorough research and analysis to identify target audience, keywords, demographics, and interests for effective campaign targeting and messaging.</li><li>Campaign Setup: Create and set up Google and Facebook ad campaigns, including ad groups, targeting options, bidding strategies, and tracking mechanisms.</li><li>Ad Creation and Copywriting: Develop compelling and engaging ad creatives, headlines, and ad copy that resonate with the target audience and align with campaign objectives.</li><li>Performance Optimization: Monitor and analyze campaign performance metrics, such as click-through rates (CTR), conversion rates, and return on ad spend (ROAS).</li><li>Implement optimization strategies to improve campaign performance.</li><li>A/B Testing: Conduct experiments and A/B tests to identify the most effective ad variations, landing pages, and targeting strategies. Implement the findings to improve campaign performance.</li><li>Budget Management: Monitor campaign budgets and allocate funds effectively to maximize ROI. Provide recommendations on budget adjustments based on campaign performance.</li><li>Conversion Tracking and Reporting: Set up conversion tracking and reporting systems to measure the effectiveness of campaigns. Generate regular reports and provide insights to clients and internal stakeholders.</li><li>Stay Up-to-Date: Keep up with the latest trends, features, and best practices in Google and Facebook advertising. Implement new strategies and features to enhance campaign performance.</li><li>Team management experience</li><li>Experience with Managing Multiple Ad Campaigns at the same time.</li><li>Collaborate with the internal team to develop and execute comprehensive digital marketing strategies.</li><li>Communicate regularly with clients to provide campaign updates and performance reports.</li><li>Provide regular analysis of competitors&#39; advertising strategies to ensure our clients remain competitive.</li></ul>',
            'read_more_url' => '#',
            'apply_now_url' => '#',
        ],
        [
            'title' => 'Visualizer Cum Graphic Designer',
            'department' => 'Graphics',
            'description' => '<p>Visualizer cum graphic designer is a professional who uses creative thinking, visual composition, and illustration to create designs. They may work on social media posts, websites, and other projects.</p>',
            'responsibilities' => '<ul><li>Create designs for social media posts</li><li>Design websites and other collateral materials</li><li>Conduct client research and provide industry information</li><li>Update websites online</li><li>Attend meetings with clients</li><li>Conduct quality checks</li><li>Maintain quality standards</li><li>Work on tight deadlines</li><li>Keep up with the latest design trends</li></ul>',
            'read_more_url' => '#',
            'apply_now_url' => '#',
        ],
        [
            'title' => 'Social Media Marketer',
            'department' => 'Social Media ',
            'description' => '<p>Our Marketing department is looking for an enthusiastic and young individual to join our team as a Social Media Executive.As a Social Media Executive, you will be responsible for maintaining our company’s &amp; Clients social media platforms. You will also be responsible for creating captivating content for all social media pages. Monitoring user engagement and analyzing feedback on a daily basis is a mandatory task.</p>',
            'responsibilities' => '<ul><li>Developing engaging social media strategies.</li><li>Managing all social media platforms of the organization.</li><li>Planning, Ideating &amp; Posting social media posts/calendars.</li><li>Creating content for social media brand-building</li><li>Talk with the client regarding their calendar needs</li><li>Monitor competition and provide suggestions for improvement</li><li>Helping Team for content for social media paid and organic.</li><li>Engaging followers with regular company updates.</li><li>Creating brand awareness to gain audience attention.</li><li>Overseeing Social Media teamwork.</li><li>Responding to the comments on social media on time if any</li><li>Monitoring social media metrics and ROI.</li><li>Analysing social media trends.</li><li>Preparing social media engagement and activities reports.</li><li>Optimizing social media content effectively.</li><li>Coordinating with the Graphics team and other team members.</li><li>Staying up to date with the latest social media advertising efforts and goals.</li><li>Making Reels, Stories with appropriate filters</li></ul>',
            'read_more_url' => '#',
            'apply_now_url' => '#',
        ],
        [
            'title' => 'SEO Specialist',
            'department' => 'SEO',
            'description' => '<p>We are looking for a result-driven SEO executive to be responsible for developing optimized web content. The SEO executive&#39;s responsibilities include working closely with the marketing team to achieve SEO objectives, measuring the success of SEO and ROI, and assisting with the maintenance of the website&#39;s architecture to ensure user friendliness.</p>',
            'responsibilities' => '<ul><li>Conducting on-site and off-site analysis of web SEO competition.</li><li>Using google analytics to conduct performance reports regularly.</li><li>Creating high-quality SEO content.</li><li>Assisting with blog content or optimizing the content.</li><li>Leading keyword research and optimization of content.</li><li>Keeping up-to-date with developments in SEM.</li><li>Create Automated daily reporting via data studio</li><li>Manually create weekly and monthly reports</li><li>Monthly work calendar</li></ul>
',
            'read_more_url' => '#',
            'apply_now_url' => '#',
        ],
    ];
    ?>

    <div id="all_roles" class="openroleSection container">
        <h3 class="text-center fw-bold pb-4">Open roles</h3>
        <div class="row">
            <?php foreach ($roles as $index => $role): ?>
                <div class="card roleCard col-lg-6 col-12 bg-transparent left p-5">
                    <span class="fw-bold fs-4 roleTitle"><?php echo $role['title']; ?></span>
                    <div class="gred">
                        <p id="roleDescription-<?php echo $index; ?>">
                            <?php echo $role['description']; ?>

                        </p>
                    </div>

                    <!-- Read More Button -->
                    <a class="w-100 rdmore text-center openRoleBtn rounded-3" href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal"
                        data-index="<?php echo $index; ?>">Read More</a>
                    <!-- Apply Now Button -->
                    <a class="w-100 text-center openRoleBtn rounded-3 mt-2" href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#applyNowModal"
                        data-index="<?php echo $index; ?>">Apply Now</a>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Read More Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content bg-dark p-4">
                    <span class="department rounded px-2" id="modalDepartment"></span>
                    <div class="modal-header position-relative p-0 pt-3">
                        <h5 class="modal-title" id="exampleModalLabel">Job Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="fw-bold">Job Description:</p>
                        <div class="" id="modalDescription"></div>

                        <!-- Responsibilities Section (Optional) -->
                        <p class="px-2 fw-bold mt-3">Responsibilities:</p>
                        <div id="modalResponsibilities"></div>
                    </div>


                    <!-- Apply Now Button -->
                    <a class="w-100 text-center openRoleBtn rounded-3 mt-2" href="#" data-bs-toggle="modal" data-bs-target="#applyNowModal" id="applyNowLink">Apply Now</a>
                </div>
            </div>
        </div>

        <!-- Apply Now Modal -->
        <div class="modal fade" id="applyNowModal" tabindex="-1" aria-labelledby="applyNowModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content bg-dark p-4">
                    <div class="modal-header position-relative">
                        <h5 class="modal-title" id="applyNowModalLabel">Apply for Job</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                        <div class="modal-body">
                            <form action="<?php echo base_url('send-mail') ?>" method="POST" enctype="multipart/form-data" id="jobApplyForm">
                                <div class="mb-3">
                                    <label for="fullName" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter Full Name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="jobType" class="form-label">Select Job Type</label>
                                    <select class="form-select" id="jobType" name="job_type" required>
                                        <option value="" disabled selected>Select Job Type</option>
                                        <option value="Full-Time">Full-Time</option>
                                        <option value="Part-Time">Part-Time</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="jobType" class="form-label">Select Job Role</label>
                                    <select class="form-select" id="jobRole" name="job_role" required>
                                        <option value="" disabled selected>Select Job Role</option>
                                        <?php
                                        foreach($roles as $role){
                                            ?>
                                            <option value="<?php echo $role['title']; ?>"><?php echo $role['title']; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address" required>
                                </div>
                                <div class="mb-3">
                                    <label for="contactNumber" class="form-label">Contact Number</label>
                                    <input type="tel" class="form-control" id="contactNumber" placeholder="Enter Contact Number" name="contactNumber" required>
                                </div>
                                <div class="mb-3">
                                    <label for="resume" class="form-label">Upload Resume</label>
                                    <input type="file" class="form-control" id="resume" name="resume" accept=".pdf" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="3" placeholder="Enter Message" required></textarea>
                                </div>
                                <!-- Hidden field for reCAPTCHA token -->
                                <input type="hidden" name="recaptcha_response" class="recaptcha-response">
    
                                <div style="display:none;">
                                    <input type="text" name="honeypot" value="" />
                                </div>
                            </form>
                        </div>
                    <div class="modal-footer">
                        <button class="w-100 text-center openRoleBtn rounded-3 mt-2" type="submit" id="applyFormButton">Apply Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        // JavaScript to handle modal content population for "Read More" and "Apply Now"
        document.addEventListener('DOMContentLoaded', function() {
            const roles = <?php echo json_encode($roles); ?>;
            const modalTitle = document.querySelector('.modal-title');
            const modalBody = document.getElementById('modalDescription');
            const department = document.querySelector('.department');
            const modalApplyNow = document.getElementById('modalApplyNow');
            const modalResponsibilities = document.getElementById('modalResponsibilities'); // for displaying responsibilities
            const applyNowButtons = document.querySelectorAll('.openRoleBtn');

            // Event listener for "Read More" Button
            const readMoreButtons = document.querySelectorAll('.rdmore');
            readMoreButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    const index = event.target.getAttribute('data-index');
                    const role = roles[index]; // Get the corresponding role object

                    // Set content in Read More Modal
                    modalTitle.textContent = role.title;
                    modalBody.innerHTML = '<p>' + role.description + '</p>';
                    department.textContent = role.department;
                    if (role.responsibilities) {
                        const responsibilitiesList = role.responsibilities.split('•').map(item => {
                            return `<li>${item.trim()}</li>`;
                        }).join('');
                        modalResponsibilities.innerHTML = `<ul>${responsibilitiesList}</ul>`;
                    } else {
                        modalResponsibilities.textContent = 'No responsibilities listed.';
                    }

                    // Set the "Apply Now" button link dynamically
                    modalApplyNow.setAttribute('data-bs-target', '#applyNowModal');
                    modalApplyNow.setAttribute('data-index', index);
                });
            });

            // Event listener for "Apply Now" Button
            applyNowButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    const index = event.target.getAttribute('data-index');
                    const role = roles[index];

                    // Populate "Apply Now" modal form with role data (if needed)
                    const applyForm = document.getElementById('applyForm');
                    applyForm.setAttribute('action', role.apply_now_url); // Set form action URL
                });
            });
        });
        
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("applyFormButton").addEventListener("click", function () {
                var form = document.getElementById("jobApplyForm");
        
                if (form.checkValidity()) {
                    form.submit();
                } else {
                    form.reportValidity(); // This will show validation messages for required fields
                }
            });
        });


    </script>

    <!-- footer start -->
    <?php $this->load->view('layout/footer'); ?>
    <!-- end  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASKHUB</title>
    <link rel="stylesheet" href="feat.css">
    <link rel="stylesheet" href="js.js">
    <link rel="stylesheet" href="utility.css">
    <link rel="stylesheet" href="foot.css">
    <link rel="stylesheet" href="fstyles.css">
    <!-- <link rel="stylesheet" href="singfeat.css"> -->
    <style>
        .hero {
            width: 100%;
            height: 25vh;
            background: url('path_to_your_image.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            padding: 0;
            margin: 0;
            position: relative;
            bottom: 6vh;
        }

        .hero-content {
            background: rgba(0, 0, 0, 0.5);
            padding: 15px 20px;
            /* Reduced padding for a tighter look */
            border-radius: 10px;
            animation: fadeIn 1s ease-in-out;
            margin: 0;
            /* Remove any margin */
        }


        .hero h1 {
            font-size: 2.5em;
            margin: 0;
            animation: slideInFromLeft 1s ease-in-out;
        }

        .hero p {
            font-size: 1.2em;
            animation: slideInFromRight 1s ease-in-out;
        }

        /* Overview Section */
        .overview {
            padding: 50px 20px;
            background-color: #f8f9fa;
        }

        .overview .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .overview h2 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
            animation: fadeIn 0.8s ease-in-out;
        }

        .overview p {
            text-align: center;
            font-size: 1.1em;
            color: #555;
            margin-bottom: 30px;
        }

        .benefits-list {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .benefits-list li {
            margin: 10px 20px;
            padding: 10px 0;
            position: relative;
            animation: fadeIn 0.8s ease-in-out;
        }

        .benefits-list .icon {
            font-size: 1.5em;
            color: #808080;
            margin-right: 10px;
            position: absolute;
            left: -30px;
            top: 50%;
            transform: translateY(-50%);
        }

        /* Detailed Explanation Section */
        .details {
            padding: 50px 20px;
            background-color: #ffffff;
        }

        .details .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .details h2 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
            animation: fadeIn 0.8s ease-in-out;
        }

        .how-to-use-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .how-to-use-list li {
            margin: 15px 0;
            padding: 15px;
            width: 80%;
            background: #f1f1f1;
            border-radius: 10px;
            position: relative;
            animation: fadeIn 0.8s ease-in-out;
        }

        .how-to-use-list .step {
            position: absolute;
            left: -50px;
            top: 50%;
            transform: translateY(-50%);
            background: #666666;
            color: white;
            font-size: 1.5em;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        /* Use Cases Section */
        .use-cases {
            padding: 50px 20px;
            background-color: #f8f9fa;
        }

        .use-cases .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .use-cases h2 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
            animation: fadeIn 0.8s ease-in-out;
        }

        .use-cases-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .case {
            background: white;
            padding: 20px;
            width: 300px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.8s ease-in-out;
        }

        .case .icon {
            font-size: 2em;
            color: #666666;
        }

        .case h3 {
            font-size: 1.5em;
            margin: 10px 0;
        }

        /* Testimonials Section */
        .testimonials {
            padding: 50px 20px;
            background-color: #ffffff;
        }

        .testimonials .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .testimonials h2 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
            animation: fadeIn 0.8s ease-in-out;
        }

        blockquote {
            font-size: 1.2em;
            line-height: 1.6;
            text-align: center;
            position: relative;
            animation: fadeIn 0.8s ease-in-out;
        }

        blockquote:before {
            content: "“";
            font-size: 4em;
            position: absolute;
            left: 10px;
            top: 0;
            color: #666666;
        }

        blockquote:after {
            content: "”";
            font-size: 4em;
            position: absolute;
            right: 10px;
            bottom: 0;
            color: #666666;
        }

        cite {
            display: block;
            margin-top: 0px;
            font-size: 1em;
            color: #555;
        }

        /* Keyframes for Animations */
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes slideInFromLeft {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideInFromRight {
            0% {
                transform: translateX(100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav class="fnvbr">
            <div class="fttl">TASKHUB</div>
            <ul class="fnavlist">
                <!-- <li class="navsec"><a href="#">FEATURES</a></li> -->
                <a class="fnavsec" href="connectab.php" id="fcons">
                    <li>CONNECT WITH US</li>
                </a>
                <a class="fnavsec" href="feat.php">
                    <li>FEATURES</li>
                </a>
                <a class="fnavsec" href="Q&A.php">
                    <li>HELP DESK</li>
                </a>
                <a class="fnavsec" href="mainhome.php">
                    <li>HOME</li>
                </a>
            </ul>
            <div class="fsignbtn">
                <a href="Registration.php">
                    <div class="fsignsec">SIGN UP</div>
                </a>
                <!-- <div class="signsec"><a href="#">SIGN UP</a></div> -->
            </div>
        </nav>
    </header>
    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content">
                <h1 style="margin-bottom: 20px;">Progress Tracking</h1>
                <p>Keep an eye on your tasks and projects with our comprehensive progress tracking feature. It allows
                    you to monitor the status of your tasks and ensure everything is on track.</p>
            </div>
        </section>

        <!-- Overview Section -->
        <section class="overview">
            <div class="container">
                <h2>Overview</h2>
                <p>Our tool provides visual indicators for task statuses, helping you stay organized and focused.</p>
                <ul class="benefits-list">
                    <li><span class="icon">📊</span><strong>Visual Status Indicators:</strong> Easily see which tasks
                        are completed, in progress, or not started.</li>
                    <li><span class="icon">⚡</span><strong>Real-Time Updates:</strong> Get instant updates on the status
                        of each task as they are marked.</li>
                    <li><span class="icon">🎯</span><strong>Goal-Oriented:</strong> Helps you stay focused and motivated
                        by visualizing progress.</li>
                </ul>
            </div>
        </section>

        <!-- How to Use Section -->
        <section class="details">
            <div class="container">
                <h2>How to Use</h2>
                <ol class="how-to-use-list">
                    <li><span class="step">1</span> View Task Status: On the main task management page, you'll see tasks
                        categorized by their status—Completed, In Progress, and Not Started.</li>
                    <li><span class="step">2</span> Update Status:
                        <ul>
                            <li><strong>Mark as Completed:</strong> Click on the checkbox next to a task to mark it as
                                completed.</li>
                            <li><strong>In Progress:</strong> Change the status to "In Progress" as you start working on
                                a task.</li>
                            <li><strong>Not Started:</strong> Tasks will default to "Not Started" until you update their
                                status.</li>
                        </ul>
                    </li>
                    <li><span class="step">3</span> Monitor Progress: Use the visual indicators and counts to keep track
                        of how many tasks are in each status category.</li>
                </ol>
            </div>
        </section>

        <!-- Use Cases Section -->
        <section class="use-cases">
            <div class="container">
                <h2>Use Cases</h2>
                <div class="use-cases-list">
                    <div class="case">
                        <span class="icon">📈</span>
                        <h3>Project Management</h3>
                        <p>Monitor the progress of multiple projects and ensure all tasks are on schedule.</p>
                    </div>
                    <div class="case">
                        <span class="icon">🌱</span>
                        <h3>Personal Development</h3>
                        <p>Track your progress on personal goals and self-improvement tasks.</p>
                    </div>
                    <div class="case">
                        <span class="icon">🤝</span>
                        <h3>Team Collaboration</h3>
                        <p>Keep team members informed about the status of shared tasks.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials">
            <div class="container">
                <h2>User Testimonials</h2>
                <blockquote>
                    "The progress tracking feature gives me a clear overview of what I've completed and what's left.
                    It's motivating to see the progress bars fill up."
                </blockquote>
                <div class="person just" id="manj">
                    <img src="manj.jpg" class="pimg" width="33px" alt="MJ"
                        style="align-self: center; margin-top: 15px;">
                    <div class="pname just" style="flex-direction: column; margin-left: 1.5vw; margin-top: 15px;">
                        <cite>Prafull Pande</cite>
                        <div class="occu"><cite>Student At GP</cite></div>
                    </div>
                </div>
            </div>
        </section>
        <div class="lr just">
            <div class="lg cs">
                <!-- <button class="lgrgb just">LOGIN</button> -->
                <a class="lgrgb just" href="login.php">LOGIN</a>
            </div>
            <div class="rg cs">
                <!-- <button class="lgrgb just">REGISTER</button> -->
                <a class="lgrgb just" href="Registration.php">GET STARTED</a>
            </div>
        </div>
    </main>
    <footer>
        <div class="foot">
            <ul class="footul firfoot">
                <li class="footsec"><a class="footlink" href="connectab.php">ABOUT US</a></li>
                <li class="footsec"><a class="footlink" href="jb.php">APPLY FOR JOB</a></li>
            </ul>
            <div class="socials just">
                <h5 class="sochead">SOCIAL MEDIA</h5>
                <div class="socialimgdiv">
                    <a
                        href="https://www.linkedin.com/in/gagan-patil-5b274a255?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><img
                            width="30px" src="icon/li.png" class="socialimg"></a>
                    <a href="https://wa.me/7620449969"><img width="30px" src="icon/Wh.png" class="socialimg"></a>
                    <a href="https://github.com/Gagan07-GP"><img width="30px" src="unnamed.png" class="socialimg"></a>
                    <a href="https://www.facebook.com/profile.php?id=100086158813428&mibextid=ZbWKwL"><img width="30px"
                            src="icon/fa.png" class="socialimg"></a>
                </div>
            </div>
            <ul class="footul secfoot">
                <li class="footsec"><a class="footlink" href="pp.php">PRIVACY POLICY</a></li>
                <li class="footsec"><a class="footlink" href="connectab.php">CONTACT US</a></li>
                <!-- <li class="footsec"><a class="footlink" href="#">MORE WEBSITES OF TASK MANAGAMENT TOOL</a></li> -->
            </ul>
        </div>
    </footer>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    
    <style>
        body {
            font-family: 'Georgia', serif;
            background-color:  #f9f3ee;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 1200px;
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 20px;
        }

        .contact-form {
            background-color: white;
            padding: 40px;
            width: 45%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-form h2 {
            font-size: 36px;
            color: #1e2022;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #000;
        }

        .form-group input, 
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #f2ede6;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group input:focus, 
        .form-group textarea:focus {
            border-color: #e5603a;
        }

        .form-group .error {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

        .submit-btn, .back-btn {
            background-color: #e5603a;
            color: white;
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }

        .submit-btn:hover, .back-btn:hover {
            background-color: #c94b27;
        }

        .newsletter {
            width: 45%;
            background-color: #f9f3e;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .newsletter h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .newsletter input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f2ede6;
        }

        .newsletter button {
            background-color: #e5603a;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .newsletter button:hover {
            background-color: #c94b27;
        }

        footer {
            margin-top: 40px;
            color: #333;
        }

        footer a {
            color: #e5603a;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .back-btn-container {
            margin-top: 20px;
        }

    </style>
</head>
<body>

<?php
    $nameErr = $emailErr = $messageErr = $phoneErr = "";
    $name = $email = $message = $phone = "";
    $isSuccess = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Name validation
        if (empty($_POST["name"])) {
            $nameErr = "Full name is required";
        } else {
            $name = test_input($_POST["name"]);
        }

        // Email validation
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        // Phone validation
        if (empty($_POST["phone"])) {
            $phoneErr = "Phone number is required";
        } else {
            $phone = test_input($_POST["phone"]);
        }

        // Message validation
        if (empty($_POST["message"])) {
            $messageErr = "Message is required";
        } else {
            $message = test_input($_POST["message"]);
        }

        // If no errors, process the form
        if (empty($nameErr) && empty($emailErr) && empty($messageErr) && empty($phoneErr)) {
            $isSuccess = true;
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>


<div class="container">
    <div class="contact-form">
        <h2>Here to help</h2>
        <?php if ($isSuccess): ?>
            <div style="color:green; text-align:center;">Your message has been sent successfully!</div>
        <?php endif; ?>

        <form id="contactForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="name">Full Name*</label>
                <input type="text" id="name" name="name" value="<?php echo $name; ?>" placeholder="Enter your full name...">
                <div class="error"><?php echo $nameErr; ?></div>
            </div>

            <div class="form-group">
                <label for="email">Email Address*</label>
                <input type="text" id="email" name="email" value="<?php echo $email; ?>" placeholder="Enter your email address...">
                <div class="error"><?php echo $emailErr; ?></div>
            </div>

            <div class="form-group">
                <label for="phone">Contact Number*</label>
                <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>" placeholder="Enter your contact number...">
                <div class="error"><?php echo $phoneErr; ?></div>
            </div>

            <div class="form-group">
                <label for="message">Message*</label>
                <textarea id="message" name="message" rows="5" placeholder="Type your message here..."><?php echo $message; ?></textarea>
                <div class="error"><?php echo $messageErr; ?></div>
            </div>

            <button type="submit" class="submit-btn">Send message →</button>
        </form>

        <div class="back-btn-container">
            <button class="back-btn" onclick="goBack()">← Go back</button>
        </div>

    </div>

    <div class="newsletter">
        <h2>Join our musicshow</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A libero adipisci velit dolorum quibusdam iste consequuntur
            esse provident sapiente quia in, doloremque nihil minima error vitae eos id nemo pariatur nam ex dolor. Facere enim 
            aliquam totam est ut magni praesentium tempore ducimus, natus at rerum debitis nulla aspernatur. Eos obcaecati, omnis
            quas quibusdam illum eveniet quis. Eos provident quaerat eaque optio minima repellendus ratione, laborum quisquam, asp
            ernatur ex, dolor voluptates doloribus id! Praesentium sequi ex animi, quis vel velit impedit. Eos fugit modi ipsa numq
            uam possimus odit maiores ea ipsam porro necessitatibus est quam excepturi corporis laudantium sapiente inventore, digni
            ssimos nemo exercitationem odio in qui ut! Saepe voluptate consequatur in mollitia magni cumque ex beatae vel veniam? Cu
            mque, quae! Neque ab ea aut quo aliquid voluptas dolorem, dolorum error nostrum possimus repellendus laborum quidem perfer
            endis temporibus est aperiam nulla iure aspernatur totam vitae esse beatae saepe quae. Debitis, animi commodi? Praesentium
             asperiores voluptatibus officia, blanditiis veritatis possimus maiores vero placeat enim ducimus nemo adipisci eius exer
             citationem nesciunt deserunt officiis, porro ea ipsam, consequatur id. Vel eveniet quibusdam exercitationem laboriosam 
             ratione fuga qui ex incidunt adipisci placeat perferendis ipsam tempore doloribus quisquam nostrum, inventore, aperiam, 
             euoptio labore ab impedit. </p>

        <input type="text" placeholder="Enter your email address...">
        <button>Sign up →</button>

        <footer>
            <p>For bookings, rates & reservations: <a href="#">Bush and Beyond</a></p>
            <p><a href="#">Terms & Conditions</a> | <a href="#">Privacy Policy</a> | <a href="#">Cookie Policy</a></p>
        </footer>
    </div>
</div>

<script>
    function goBack() {
        window.history.back();
    }
</script>

</body>
</html>

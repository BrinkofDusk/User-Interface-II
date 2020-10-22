<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=    <h1> ABOUT </h1>, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css" />
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <header>
        <h1>Contact</h1>
        <nav>
            <a href="index.html" >Home</a>
            <a href="about.html" >About Me</a>
            <a href="contact.html">Contact</a>
            <a href="projects.html" >Projects</a>
            <a href="funfacts.html"  ">Fun Facts</a>
        </nav>
        <div class="dropDown-Container">
            <button id="mButton">Menu</button>
            <div class="dropDown-Content">
                <a href="index.html" >Home</a>
                <a href="about.html" >About Me</a>
                <a href="contact.html">Contact</a>
                <a href="projects.html" >Projects</a>
                <a href="funfacts.html"  >Fun Facts</a>
                </div>
            </div>
    </header>

    <div class="mainContent">
        <p>Since your here, I would love to hear from you! Please submit a contact form.</p>

            <form method="post" action="contact.php">
                <label for="fName">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Enter first name...">
                <label for="lName">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Enter last name...">
                <label for="returnEmail">Email</label>
                <input type="text" id="rEmail" name="rEmail" placeholder="Please enter your contact email">
                <label for="subjct">Subject</label>
                    <select id="subjct" name="subject">
                        <option value="gmsg">General Message</option>
                        <option value="Props/Complaints/Tips/Request">Props/Complaints/Tips/Requests</option>
                        <option value="jobs">Job Request/Consultations</option>
                    </select>

                <label for="message">Message</label>
                <textarea id="msg" name="message" placeholder="Please enter a detailed message. Thank you." style="height:200px"></textarea>
                <input type="submit" value="Submit">
            </form>

    </div>

    <footer>
        <a href="index.html" >Home</a>
        <a href="about.html">About Me</a>
        <a href="contact.html">Contact</a>
        <a href="projects.html">Projects</a>
        <a href="funfacts.html">Fun Facts</a>
</footer>
</body>
</html>
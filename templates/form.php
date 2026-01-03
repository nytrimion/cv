<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resume Generator</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            padding: 40px;
        }

        form {
            max-width: 400px;
            background: #f8f9fa;
            padding: 30px;
            border-radius: 8px;
        }

        form .row {
            margin-top: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
        }

        select, input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <form method="POST" target="_blank">
        <div class="row">
            <label for="lang">Language:</label>
            <select id="lang" name="lang">
                <option value="fr">French</option>
                <option value="en">English</option>
            </select>
        </div>
        <div class="row">
            <label for="title">Job Title:</label>
            <select id="title" name="title">
                <option>Senior/Lead Developer</option>
                <option>Lead Developer</option>
                <option>Senior Backend Developer</option>
                <option>Senior Backend Engineer</option>
                <option>Senior Fullstack Developer</option>
                <option>Senior Fullstack Engineer</option>
                <option>Staff Engineer</option>
                <option>Tech Lead</option>
            </select>
            <input type="text" id="custom-title" name="custom-title" placeholder="Custom job title" />
        </div>
        <div class="row">
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>

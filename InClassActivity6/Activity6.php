<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: inline-block;
            width: 100px;
            margin-right: 10px;
        }
        input[type="text"],
        input[type="password"],
        input[type="email"],
        select {
            width: 200px;
            padding: 5px;
        }
        textarea {
            width: 200px;
            height: 100px;
            vertical-align: top;
        }
        .radio-group,
        .checkbox-group {
            display: inline-block;
        }
        .radio-group label,
        .checkbox-group label {
            width: auto;
            margin-right: 15px;
        }
        input[type="submit"] {
            margin-left: 110px;
        }
    </style>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="Activity6-preview.php" method="POST">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
        </div>
        
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
        </div>
        
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>
        
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address">
        </div>
        
        <div class="form-group">
            <label for="country">Country:</label>
            <select id="country" name="country">
                <option value="America">America</option>
                <option value="Germany">Germany</option>
                <option value="France">France</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="zipcode">ZIP Code:</label>
            <input type="text" id="zipcode" name="zipcode">
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        
        <div class="form-group">
            <label>Sex:</label>
            <div class="radio-group">
                <input type="radio" id="male" name="sex" value="Male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="sex" value="Female">
                <label for="female">Female</label>
            </div>
        </div>
        
        <div class="form-group">
            <label>Language:</label>
            <div class="checkbox-group">
            <td class="checkbox-group">
                    English<input type="checkbox" name="language[]" value="English"> 
                    French<input type="checkbox" name="language[]" value="French">
                    German<input type="checkbox" name="language[]" value="German"> 
             </td>
            </div>
        </div>
        
        <div class="form-group">
            <label for="about">About:</label>
            <textarea id="about" name="about"></textarea>
        </div>
        
        <input type="submit" value="submit">
    </form>
</body>
</html>

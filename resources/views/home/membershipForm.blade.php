<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('home/CSS/style.css')}}">
</head>
<body>
@include('home.navbar')
<section class="membershipForm">
    <div class="membership-form-container">
        <form method="post" action="{{route('be-a-member')}}">
            @csrf
            <div class="form-group">
                <label for="name">Name*</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="country">Country*</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="Enter your country" required>
            </div>
            <div class="form-group">
                <label for="district">District*</label>
                <input type="text" class="form-control" id="district"  name="district" placeholder="Enter your district" required>
            </div>
            <div class="form-group">
                <label for="city">City*</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Enter your city" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number*</label>
                <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile number" required>
            </div>
            <div class="form-group">
                <label for="email">Email*</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="school">School*</label>
                <select class="form-control" id="school" name="school" required>
                    <option value="">Select an option</option>
                    <option value="school1">School 1</option>
                    <option value="school2">School 2</option>
                    <option value="school3">School 3</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group" id="otherSchoolContainer" style="display: none;">
                <label for="otherSchool">Other School</label>
                <input type="text" class="form-control" id="otherSchool" name="otherSchool" placeholder="Enter other school name">
            </div>
            <div class="form-group">
                <label for="workedOnOrg">Worked on any organization</label>
                <input type="text" class="form-control" id="workedOnOrg" name="workedOnOrg" placeholder="Enter your previous organization">
            </div>
            <button type="submit" class="btn" style="background-color: rgba(0,0,255,0.56);margin: 5px; margin-left: 40%">Submit</button>
        </form>
    </div>
</section>

<script>
    document.getElementById('school').addEventListener('change', function() {
        var otherSchoolContainer = document.getElementById('otherSchoolContainer');
        if (this.value === 'other') {
            otherSchoolContainer.style.display = 'block';
            document.getElementById('school').value = document.getElementById('otherSchool').value;
        } else {
            otherSchoolContainer.style.display = 'none';
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

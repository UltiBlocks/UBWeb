<?php include 'header.php'; ?>

<main>
    <section class="signup-form">
        <h1>Join the community</h1>
        <p>Already have an account? <a href="#">Log in</a></p>

        <form action="#" method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br><br>

            <label for="confirm_password">Confirm Password:</label><br>
            <input type="password" id="confirm_password" name="confirm_password"><br><br>

            <label>Gender:</label><br>
            <div class="gender-options">
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">He/Him</label><br>

                <input type="radio" id="female" name="gender" value="female">
                <label for="female">She/Her</label><br>

                <input type="radio" id="other" name="gender" value="other">
                <label for="other"><input type="text" id="other_gender" name="other_gender_text" placeholder="Other" disabled></label><br>
            </div>
            <br>

            <label for="email">Email (Optional):</label><br>
            <input type="email" id="email" name="email"><br><br>

            <button type="submit">Join</button>
        </form>
    </section>
</main>

<script>
    const genderRadios = document.querySelectorAll('input[name="gender"]');
    const otherGenderInput = document.getElementById('other_gender');

    function handleGenderChange() {
        if (document.getElementById('other').checked) {
            otherGenderInput.disabled = false;
        } else {
            otherGenderInput.disabled = true;
            otherGenderInput.value = ""; // Clear the input when disabled
        }
    }

    genderRadios.forEach(radio => {
        radio.addEventListener('change', handleGenderChange);
    });

    // Call handleGenderChange on page load to set the initial state
    window.addEventListener('DOMContentLoaded', handleGenderChange);
</script>

<?php include 'footer.php'; ?>  

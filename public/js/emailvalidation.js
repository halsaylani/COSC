function IsValidEmail(email) {
             return /^\"?[\w-_\.]*\"?@algomau\.ca$/.test(email);
        };
        function ValidateEmail() {
            var email = document.getElementById("txtEmail").value;
            if (!IsValidEmail(email)) {
                alert("Invalid email address form will be @algomau.ca");
            }
            
        }
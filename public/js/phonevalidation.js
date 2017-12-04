function IsValidPhone(phone) {
             return /^(1\s|1|)?((\(\d{3}\))|\d{3})(\-|\s)?(\d{3})(\-|\s)?(\d{4})$/.test(phone);
        };
        function ValidatePhone() {
            var phone = document.getElementById("phone").value;
            if (!IsValidPhone(phone)) {
                alert("Invalid phone number");
            }
        }
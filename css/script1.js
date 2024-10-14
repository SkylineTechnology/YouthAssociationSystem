var regAcctBtn = document.getElementById('btnRegister');
var firstname = document.getElementById('fname');
var othername = document.getElementById('oname');
var dateOfBirth = document.getElementById('dob');
var Gender = document.getElementById('gender');
var Phone = document.getElementById('phone');
var mail = document.getElementById('email');
var Qualification = document.getElementById('qualification');
var State = document.getElementById('state');
var Lga = document.getElementById('lga');
var errorbox = document.getElementById('errorBox');



// make reference to span ID
var spanFirstName = document.getElementById('spanFname');
var spanOtherName = document.getElementById('spanOname');
var spanDateOfBirth = document.getElementById('spanDob');
var spanSex = document.getElementById('spanGender');
var spanNumber = document.getElementById('spanPhone');
var spanMail = document.getElementById('spanEmail');
var spanQualif = document.getElementById('spanQualification');
var spanStat = document.getElementById('spanState');
var spanLGA = document.getElementById('spanLga');
var spanSubmitBtn = document.getElementById('spanSubmit');


// adding event Listener to register page
regAcctBtn.addEventListener('click', function () {
    errorMsgArr = [];

    var nameFerrorMgsArr = [];
    var nameOerrorMgsArr = [];
    var doBerrorMgsArr = [];
    var gendeRerrorMgsArr = [];
    var numbeRerrorMgsArr = [];
    var maiLerrorMgsArr = [];
    var qualificatioNerrorMgsArr = [];
    var staTerrorMgsArr = [];
    var lgAerrorMgsArr = [];

    nameF = firstname.value;
    nameO = othername.value;
    date = dateOfBirth.value;
    sex = Gender.value;
    number = Phone.value;
    maiL = mail.value;
    qual = Qualification.value;
    statE = State.value;
    lga = Lga.value;
    error = errorbox.value;

    spanFirstName.textContent = "",
    spanOtherName.textContent = "";
    spanDOB.textContent = "";
    spanGender.textContent = "";
    spanPhone.textContent = "";
    spanMail.textContent = "";
    spanQualification.textContent = "";
    spanState.textContent = "";
    spanLga.textContent = "";
    spanSubmitBtn.textContent = "";
    
    if (nameF == '' || nameF == null)
            nameFerrorMgsArr.push("Firstname is Required!");
            if (nameF.match(/[^a-zA-Z]/i))
            nameFerrorMgsArr.push("Firstname must contain only Alphabet!");
            else {
                nameFerrorMgsArr.forEach(errorMsg => {
                    spanFirstName.textContent = errorMsg;
                });
            }
         
            
            if (errorMsgArr.length < 1){
        document.getElementById('spanSubmitBtn').textContent = "Registration was successful";
        }


        else {
            errorMsgArr.forEach(errorMsg => {
                var span = document.createElement('span');
                span.textContent = errorMsg;
                spanConfirmPassword.appendChild(span);
            });
        }
    
    
    
})


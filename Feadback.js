function ValidationForm(){
    let name = document.forms["feadbackForm"]["name"];
    //to check name contian a letter only and do no include html tage 
    const letters = /^[a-zA-Z]+$/;
    const htmlTagPattern = /<\/?[^>]+>/;


    let username = document.forms["feadbackForm"]["username"];
    let email = document.forms["feadbackForm"]["Email"];
    let comment = document.forms["feadbackForm"]["comment"];

    






    //---------------------------------------------------------------
    //check the name is entered coorect by lenght, only letter contain and do not contain space or html tages
    // else send alert and focus on name form with red color
    if (name.value=="" || name.value.search(/\w{5,20}/)==-1 || !letters.test(name.value) || htmlTagPattern.test(name)){
        alert("Incorrect name");
        name.style.borderColor = "red";
        name.focus();
        return false; // Prevent form submission
    }
    

    //------------------------------------------------------------------
    //check the username is not empty
    if (username.value =="" || username.value.search(/\w{5,20}/)==-1 || htmlTagPattern.test(username)){
        alert("Incorrect username");
        username.style.borderColor = "red";
        username.focus();
        return false; // Prevent form submission
    }

    //-------------------------------------------------------------------
    //check the email if is empty & contain @ & contain (.)
    if(email.value =="" || email.value.indexOf("@", 0) < 0 || email.value.indexOf(".", 0) < 0){
        alert("Incorrect Email");
        email.style.borderColor = "red";
        email.focus();
        return false; // Prevent form submission
    }


    //-------------------------------------------------------
    //check the select boxes
     // get checkboxes with the name star
     const checkboxes = document.getElementsByName("star");
     // Check if at least one checkbox is selected -------------
    let isChecked = false;
    for (let checkbox of checkboxes) {
        if (checkbox.checked) {
            isChecked = true;
            break;
        }
    }
    
    // if no checkbox select
    if (!isChecked) {
        alert("Please select at least one star rating.");
        return false; // Prevent form submission
    }



    //--------------------------------------------------------------------------
    // check that the user write a comment different that the comment in textarea
    if(comment.value=="" || comment.value == "write your comment her"){
        alert("Please write comment");
        comment.style.borderColor = "red";
        comment.focus();
        return false; // Prevent form submission
    }



    //----------------------------------------------------------------------
    // make sure that the user want to send the form 
    if(confirm("Are you sure you want to submit the form?")){
        alert("The form send successfully");
        return true; // Allow form submission
    }
    else{
        alert("The form faild to send");
        return false; // Allow form submission
    }
    

}


// we should get all required els
const form = document.querySelector('form'),
    statusTxt = form.querySelector(".status")

form.onsubmit = (e)=>{
    e.preventDefault();
    statusTxt.style.color = "#05004E";
    statusTxt.style.display = "block";

    let xhr = new XMLHttpRequest(); // нужно больше узнать про AJAX
    xhr.open("POST", "../../processing/message.php", true); //sending post request to message.php file
    xhr.onload = ()=> {
        if (xhr.readyState == 4 && xhr.status == 200) {
            let response = xhr.response; // storing ajax response in a response
            if (response.indexOf("Email and message field is required!") != -1 || response.indexOf("Sorry, failed to send your message!") != -1
            || response.indexOf("Enter a valid email address!") != -1) {
                statusTxt.style.color = 'red';
            }
            else {
                form.reset();
                setTimeout(() => {
                    statusTxt.style.display = "none";
                }, 3000);
            }
            statusTxt.innerText = response;
        } // if ajax response status is 200 & ready status is 4 than everything is ok
    }
    let formData = new FormData(form); // object that is used to send form data
    xhr.send(formData);
}
const form = document.getElementById("Auto-trance");
const formFields = form.elements;
const submitBtn = form.querySelector('[type = button]');

submitBtn.addEventListener('click', clearStorage);

function clearStorage() {
    localStorage.clear();
}

function attachEvents() {
    for (let i = 0; i < formFields.length; i++){
        formFields[i].addEventListener('change', changeHandler)
    }
}

function changeHandler() {
    if (this.type !== 'checkbox'){
        localStorage.setItem(this.name, this.value);
    } else {
        localStorage.setItem(this.name, this.checked);
    }
}

function checkStorage() {
    for (let i = 0; i < formFields.length; i++){
        if (formFields[i].type !== 'button'){
            if (formFields[i].type === 'checkbox'){
                formFields[i].checked = localStorage.getItem(formFields[i].name);
            } else {
                formFields[i].value = localStorage.getItem(formFields[i].name);
            }
        }
    }
    attachEvents();
}

checkStorage();
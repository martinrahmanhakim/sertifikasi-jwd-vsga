const form = document.getElementById('pemesananForm');
const nomorIdentitasInput = document.getElementById('nomor_identitas');
const submitButton = document.getElementById('submitButton');
const nomorError = document.getElementById('nomor_error');

// Function to validate form fields
function validateForm() {
    const isFormValid = form.checkValidity();
    const nomorIdentitas = nomorIdentitasInput.value;

    // Check if "Nomor Identitas" is exactly 16 digits
    if (nomorIdentitas.length !== 16) {
        nomorError.textContent = 'Nomor identitas harus 16 digit.';
        nomorIdentitasInput.classList.add('is-invalid');
    } else {
        nomorError.textContent = '';
        nomorIdentitasInput.classList.remove('is-invalid');
    }

    // Enable submit button if the form is valid and "Nomor Identitas" is correct
    submitButton.disabled = !(isFormValid && nomorIdentitas.length === 16);
}

// Add event listeners to all form inputs to trigger validation
form.querySelectorAll('input, select').forEach(input => {
    input.addEventListener('input', validateForm);
});

// Validate form on page load in case some fields are pre-filled
window.addEventListener('load', validateForm);
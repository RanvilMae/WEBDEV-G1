
function UploadFile(classification, pdf, date) {
this.classification = classification;
this.pdf = pdf;
this.date = date;
}

// UI Constructor
function UI() {}

// Add UploadFile To list
UI.prototype.addUploadFileToList = function(uppdf) {
  const list = document.querySelector('#pdf-list');
  // Create tr element
  const row = document.createElement('tr');
  // Insert Cols
  row.innerHTML = `
  <td>${uppdf.classification}</td>
  <td>${uppdf.pdf}</td>
  <td>${uppdf.date}</td>
  <td><a href="#" class="delete">X</a></td><br>
  `;

  list.appendChild(row);
}
// clear Fields
UI.prototype.clearFields = function() {
  document.querySelector('#classification').value = ''
  document.querySelector('#pdf').value = ''
  document.querySelector('#date').value  = ''
}

// Show Alert
UI.prototype.showAlert = function(message, className) {
  // Create div
  const div = document.createElement('div');
  // Add classes
  div.className = `alert ${className}`;
  // Add Text
  div.appendChild(document.createTextNode(message));
  // Get parent
  const container = document.querySelector('.container');
  // Get Form
  const form = document.querySelector('#pdf-form');
  // Insert alert
  container.insertBefore(div, form);

  console.log(form);

  // TimeOut after 3 sec
  setTimeout(function() {
  document.querySelector('.alert').remove();
  }, 3000);

}




// Event Listeners
document.querySelector('#pdf-form').addEventListener('submit', function(e) {
  // Get form values
  const classification = document.querySelector('#classification').value,
   pdf = document.querySelector('#pdf').value,
   date = document.querySelector('#date').value;

  console.log(classification, pdf, date);
  // Instantiate uppdf
  const uppdf = new UploadFile(classification, pdf, date);

  // Instantiate UI
  const ui = new UI();

  // Validate
  if(classification === '' || pdf === '' || date === '') {
    // Error alert
    ui.showAlert('Please fill in all fields', 'error');
  } else {
    // Add uppdf to list
    ui.addUploadFileToList(uppdf);
    // Clear Fields
    ui.clearFields();
    // Show alert
    ui.showAlert('File Added!', 'success');
  
  }

  

  e.preventDefault();
});

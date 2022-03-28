

// define variables
let items = Array.from(document.querySelectorAll(".item"));
let dataItems = [];
let removeBtns = Array.from(document.querySelectorAll('.removeIcon'));
const popUp = document.querySelector('.popUp');
const eventBtn = document.querySelector('.eventButton');
const titleInput = document.querySelector('#eventTitle');
const dateInput = document.querySelector('#eventDate');
const textarea = document.querySelector('#eventText');
const addBtn = document.querySelector('#addBtn');
const timeLine = document.querySelector(".timeline");


// check if an element is in viewport
function isElementInViewport(el) {
  let rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.bottom <=
    (window.innerHeight - 30 || document.documentElement.clientHeight - 30)
  );
}

function changeClass() {
  for (let i = 0; i < items.length; i++) {
    if (isElementInViewport(items[i])) {
      items[i].classList.add("in-view");
    }
    if (!isElementInViewport(items[i])) {
      items[i].classList.remove("in-view");
    }
  }
}

// listen for events
window.addEventListener("load", changeClass);
window.addEventListener("resize", changeClass);
window.addEventListener("scroll", changeClass);


/* Back to top button script */

//Get the button:
let myButton = document.querySelector("#upButton");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
    myButton.style.display = "block";
  } else {
    myButton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  console.log("Top button clicked");
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
myButton.addEventListener('click', topFunction);

//Add event to timeline

addBtn.addEventListener('click', function () {
  if (titleInput.value == "") {
    alert("You missed the title!");
  } else if (dateInput.value == "") {
    alert("You missed the date!");
  } else if (textarea.value == "") {
    alert("You missed the text!");
  } else {
    updateTimeLine();
    changeClass();
  }
})


/* Add event popup script */

// When the user clicks the button, open the modal 
eventBtn.addEventListener('click', function () {
  popUp.style.display = "block";
  console.log("Event click");
})
window.addEventListener('click', function () {
  if (event.target == popUp) {
    popUp.style.display = "none";
  }
})
addBtn.addEventListener('click', function () {
  popUp.style.display = "none";
})


/* Update the timeline and sort it */
function updateTimeLine() {
  let sortId = dateInput.value.toString();
  sortId = sortId.replace('-', '');
  sortId = sortId.replace('-', '');

  let check = dataItems.find((item) => (item.sortId === sortId));
  if (check) {
    alert("An event already exists on that day. CAnnot crate!");
  }

  //Get all the new values
  const newItem = {
    id: sortId,
    heading: titleInput.value,
    date: dateInput.value,
    description: textarea.value
  };

  //Add the new object to the array
  dataItems.push(newItem);

  //Sort object array
  dataItems.sort(function (a, b) { return a.id - b.id });


  //Clear the HTML div
  timeLine.innerHTML = "";

  //Loop through each object and recreate them as HTML elements
  let i = 0;
  dataItems.forEach((section) => {
    let eventItem = document.createElement('section')


    eventItem.innerHTML = "<div class=\"time\">" + "<h2>" + dataItems[i].date + " - " + dataItems[i].heading + "<button class=\"removeIcon\" id=\"remove" + i + "\">✖</button></h2>" + "<p>" + dataItems[i].description + "</p>" + "</div>";
    timeLine.appendChild(eventItem);
    eventItem.classList.add("item");
    //Check eventItem
    console.log(eventItem);
    i++;
  });
  //Check the object array
  console.log(dataItems);

  //Create the remove buttons
  removeBtns = Array.from(document.querySelectorAll('.removeIcon'));
  removeBtns.forEach(button => {
    button.addEventListener('click', (event) => {
      console.log("Start remove element");
      console.log(dataItems);
      event.target.parentNode.parentNode.parentNode.remove();
      items = Array.from(document.querySelectorAll(".item"));
      let itemToRemove = dataItems.find((item) => { item.sortId === id }); dataItems.splice(dataItems.indexOf(itemToRemove), 1);
      console.log(dataItems);
      console.log("End remove element");
    })
  });
  //Refresh the items array
  items = Array.from(document.querySelectorAll(".item"));
}
let eventRemoveBtn = document.createElement("button");
eventRemoveBtn.addEventListener("click", (event) => {
  removeItemX(dataItems[i].sortId);
})

/* function removeItemX(id) {
  let itemToRemove = dataItems.find((item) => { item.sortId === id});
  dataItems.splice(dataItems.indexOf(itemToRemove), 1);
}


//Remove item
function removeItem(index) {
  console.log("removeItem");

  //Log the button clicked and at what index
  console.log("remove button at index", index, "was clicked");

  //Remove the element
  dataItems.splice(index, 1);
  timeLine.removeChild(items[index]);

  //Check dataItems array
  console.log(dataItems);
  //Update the items array
  items = Array.from(document.querySelectorAll(".item"));
}
function updateRemoveButtons() {
  console.log("updateRemoveButtons");
  //Find all buttons
  removeBtns = "";
  removeBtns = Array.from(document.querySelectorAll('.removeIcon'));
  //For every button, loop once
  for (let i = 0; i < removeBtns.length; i++) {
    console.log(i);
    //Create an eventlistener for each button
    document.querySelector('#remove' + i).addEventListener('click', function () {
      removeItem(i);
    })
    
  }
} 

 */


//Manipulate HTML with dataItems
//updateTimeline() to empty timeline and remake it with the items in the dataItems array
//Add eventlisteners when making the button
//Have the button remove the target of the event. Aka, the function removes the button that was clicked with "event.target.parentNode.parentNode.remove()" to target the parent section element of the button.
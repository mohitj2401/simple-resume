//  Custom mail pagination
const paginationNumbers = document.getElementById("pagination-numbers");
const paginatedList = document.getElementById("paginated-list");
const listItems = paginatedList.querySelectorAll("li");
const nextButton = document.getElementById("next-button");
const prevButton = document.getElementById("prev-button");

const paginationLimit = 8;
const pageCount = Math.ceil(listItems.length / paginationLimit);
let currentPage = 1;

const disableButton = (button) => {
  button.classList.add("disabled");
  button.setAttribute("disabled", true);
};

const enableButton = (button) => {
  button.classList.remove("disabled");
  button.removeAttribute("disabled");
};

const handlePageButtonsStatus = () => {
  if (currentPage === 1) {
    disableButton(prevButton);
  } else {
    enableButton(prevButton);
  }

  if (pageCount === currentPage) {
    disableButton(nextButton);
  } else {
    enableButton(nextButton);
  }
};

const handleActivePageNumber = () => {
  document.querySelectorAll(".pagination-number").forEach((button) => {
    button.classList.remove("active");
    const pageIndex = Number(button.getAttribute("page-index"));
    if (pageIndex == currentPage) {
      button.classList.add("active");
    }
  });
};

const appendPageNumber = (index) => {
  const pageNumber = document.createElement("button");
  pageNumber.className = "pagination-number";
  pageNumber.innerHTML = index;
  pageNumber.setAttribute("page-index", index);
  pageNumber.setAttribute("aria-label", "Page " + index);

  paginationNumbers.appendChild(pageNumber);
};

const getPaginationNumbers = () => {
  for (let i = 1; i <= pageCount; i++) {
    appendPageNumber(i);
  }
};

const setCurrentPage = (pageNum) => {
  currentPage = pageNum;

  handleActivePageNumber();
  handlePageButtonsStatus();

  const prevRange = (pageNum - 1) * paginationLimit;
  const currRange = pageNum * paginationLimit;

  listItems.forEach((item, index) => {
    item.classList.add("hidden");
    if (index >= prevRange && index < currRange) {
      item.classList.remove("hidden");
    }
  });
};

window.addEventListener("load", () => {
  getPaginationNumbers();
  setCurrentPage(1);

  prevButton.addEventListener("click", () => {
    setCurrentPage(currentPage - 1);
  });

  nextButton.addEventListener("click", () => {
    setCurrentPage(currentPage + 1);
  });

  document.querySelectorAll(".pagination-number").forEach((button) => {
    const pageIndex = Number(button.getAttribute("page-index"));

    if (pageIndex) {
      button.addEventListener("click", () => {
        setCurrentPage(pageIndex);
      });
    }
  });
});

/*=====================
  Email hide/show js
==========================*/

// let listItem = document.querySelectorAll("i");
// const envelope_1 = document.querySelector(".envelope-1");
// const envelope_2 = document.querySelector(".envelope-2");

// listItem.forEach((item, index) => {
//   envelope_2.addEventListener("click", (event) => {
//     envelope_1.classList.remove("hide");
//     envelope_1.classList.add("show");
//     envelope_2.classList.remove("show");
//     envelope_2.classList.add("hide");
//   });

//   envelope_1.addEventListener("click", (event) => {
//     envelope_2.classList.remove("hide");
//     envelope_2.classList.add("show");
//     envelope_1.classList.remove("show");
//     envelope_1.classList.add("hide");
//   });
// });

// Get the necessary elements
// const toggleButton = document.getElementsByClassName("email-options");
// toggleButton.forEach(function (icons) {
//   const openIcon = icons.querySelectorAll(".envelope-2");
//   const closeIcon = icons.querySelectorAll(".envelope-1");

//   icons.addEventListener("click", function () {
//     openIcon.style.display =
//       openIcon.style.display == "none" ? "inline" : "none";
//     closeIcon.style.display =
//       closeIcon.style.display == "none" ? "inline" : "none";
//   });
// });

const listItems1 = document.querySelectorAll(".inbox-data");

listItems1.forEach(function (item) {
  const envelope_1 = item.querySelector(".envelope-1");
  const envelope_2 = item.querySelector(".envelope-2");

  item.addEventListener("click", function () {
    if (envelope_1) {
      envelope_1.classList.toggle("show");
      envelope_2.classList.toggle("hide");
    }
    if (envelope_2) {
      envelope_1.classList.toggle("hide");
      envelope_2.classList.toggle("show");
    }
  });
});

// const InboxData1 = document.querySelectorAll(".email-options");
// InboxData1?.forEach((el) => {
//   const deleteIcon1 = el.querySelector(".envelope-1");
//   deleteIcon1.addEventListener("click", function () {
//     this.closest(".envelope-1").style.display = "block";
//   });
//   const deleteIcon2 = el.querySelector(".envelope-2");
//   deleteIcon2.addEventListener("click", function () {
//     this.closest(".envelope-2").style.display = "none";
//   });
// });

// const InboxData1 = document.querySelectorAll(".email-options");
// InboxData1?.forEach((el) => {
//   console.log("text", InboxData1);
//   const deleteIcon1 = el.querySelector(".envelope-1");
//   deleteIcon1.addEventListener("click", function () {
//     console.log("test");
//     this.closest(".inbox-data").classList.add("show");
//   });
// });

// // =================================================================
// document.addEventListener("DOMContentLoaded", function () {
//   var envelope_1 = document.getElementsByClassName("envelope-1");
//   var envelope_2 = document.getElementsByClassName("envelope-2")[0];

//   for (var i = 0; i < envelope_1.length; i++) {
//     envelope_1[i].addEventListener("click", function () {
//       if (envelope_2.classList.contains("show")) {
//         envelope_2.classList.remove("hide");
//         console.log("abc", envelope_1);
//       } else {
//         envelope_2.classList.add("show");
//       }
//       console.log("hello", envelope_2);
//     });
//     envelope_2[i].addEventListener("click", function () {
//       if (envelope_1.classList.contains("hide")) {
//         envelope_1.classList.remove("show");
//       } else {
//         envelope_1.classList.add("hide");
//       }
//     });
//   }
// });

/*======================
 Delete Quantity Item js
=======================*/
const InboxData = document.querySelectorAll(".inbox-data");
InboxData?.forEach((el) => {
  const deleteIcon = el.querySelector(".trash-3");
  deleteIcon.addEventListener("click", function () {
    this.closest(".inbox-data").style.display = "none";
  });
});

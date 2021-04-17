let mealPlans = [
  {
    name: "LUXURY",
    amount: 399,
    amountPerMeal: 13.3,
    discription: [
      {
        text: "1 meal every day",
        icon: true,
      },
      {
        text: "Order 24/7",
        icon: true,
      },
      {
        text: "Access to newest creations",
        icon: true,
      },
      {
        text: "Free Delivery",
        icon: true,
      },
    ],
  },
  {
    name: "PRO",
    amount: 149,
    amountPerMeal: 14.9,
    discription: [
      {
        text: "10 meals every month",
        icon: true,
      },
      {
        text: "Order 24/7",
        icon: true,
      },
      {
        text: "Access to newest creations",
        icon: true,
      },
      {
        text: "Free Delivery",
        icon: true,
      },
    ],
  },
  {
    name: "PREMIUM",
    amount: 99,
    amountPerMeal: 19.8,
    discription: [
      {
        text: "5 meals every month",
        icon: true,
      },
      {
        text: "Order from 8 am to 12 pm",
        icon: true,
      },
      {
        text: "Access to newest creations",
        icon: false,
      },
      {
        text: "Free Delivery",
        icon: false,
      },
    ],
  },
];

let otherProducts = [
  {
    name: "Omifoods Premium Hoodie",
    amount: 49.99,
    discription: [
      {
        text: "80% cotton, 20% polyester pullover hoodie",
        icon: true,
      },
      {
        text: "Machine washable",
        icon: true,
      },
    ],
  },
  {
    name: "Omifoods Tee Shirt",
    amount: 24.99,
    discription: [
      {
        text: "Printed with soft hand inks for premium finish",
        icon: true,
      },
      {
        text: "Machine Washable",
        icon: true,
      },
    ],
  },
  {
    name: "Omifoods Travel Cup",
    amount: 9.99,
    discription: [
      {
        text: "Microwave, freezer and dishwasher safe",
        icon: true,
      },
      {
        text: "Safe for hot & cold",
        icon: true,
      },
    ],
  },
  {
    name: "Omifoods Coasters",
    amount: 19.99,
    discription: [
      {
        text: "Water and Stain Resistant",
        icon: true,
      },
      {
        text: "Light Weight",
        icon: true,
      },
    ],
  },
  {
    name: "Omifoods Cutlery Set",
    amount: 14.99,
    discription: [
      {
        text: "Includes: Fork, Spoon, Knife and a pouch",
        icon: true,
      },
      {
        text: "Diswasher safe",
        icon: true,
      },
    ],
  },
  {
    name: "The Omnifoods Cookbook",
    amount: 299,
    discription: [
      {
        text: "Contains all year 1 recipies",
        icon: true,
      },
      {
        text: "Limited Quantities",
        icon: true,
      },
    ],
  },
  {
    name: "Omnifoods Giftcard",
    amount: 100,
    discription: [
      {
        text: "1 Giftcard worth $110 for $100",
        icon: true,
      },
      {
        text: "Limited Quantities",
        icon: true,
      },
    ],
  },
];
// Modal JS

// Get the modal
var modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
var span = document.getElementById("close");
// When the user clicks on <span> (x), close the modal
const closeModal = () =>{
    modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

// Function to open the modal
const test = (id, listType) => {
  modal.style.display = "block";
  console.log(listType);
  if (listType === "meals") {
    modal.innerHTML =
      `<span class="close" id="close" onClick=closeModal()>&times;</span>` +
      setModal([mealPlans[id]]);
  } else {
    modal.innerHTML =
      `<span class="close" id="close" onClick=closeModal()>&times;</span>` +
      setModal([otherProducts[id]]);
  }
  console.log(id);
  console.log(listType);

  let keycookie = document.cookie; // read your cookie here
  keycookie += "&" + id + "@" + listType;
  document.cookie = keycookie;
  console.log(document.cookie);
  
};

const setModal = (informationList) => {
  let data = "";

  colClass = "col modal-content center-modal";
  for (let i = 0; i < informationList.length; i++) {
    data += `<div class='${colClass}'>
                      <div class="plan-box">
                          <div>
                              <h3>${informationList[i].name}</h3>
                              `;

    data += `<p class="plan-price">$${informationList[i].amount}</p>`;

    data += `
                          </div>
                          <div>
                     
                      <ul>
                     `;
    informationList[i].discription.forEach((disc) => {
      let className = disc.icon
        ? "ion-ios-checkmark-empty iconsmall"
        : "ion-ios-close-empty iconsmall";
      data += `<li><i class='${className}'></i> ${disc.text}</li>`;
    });
    data += `</ul>
      </div>`;
  }
  return data;
};

const setData = (informationList, listType) => {
    let data = "";
  
    colClass = listType === "meals" ? "col span-1-of-3" : "col span-1-of-4";
    for (let i = 0; i < informationList.length; i++) {
      data += `<div class='${colClass}'>
                      <div class="plan-box">
                          <div>
                              <h3>${informationList[i].name}</h3>
                              `;
      if (listType === "meals") {
        data += `
                              <p class="plan-price">$${informationList[i].amount} <span>/ month</span> </p>
                              <p class="plan-price-meal"> That's only $${informationList[i].amountPerMeal} per meal</p>`;
      } else {
        data += `<p class="plan-price">$${informationList[i].amount}</p>`;
      }
      data += `
                          </div>
                          <div>
                     
                      <ul>
                     `;
      informationList[i].discription.forEach((disc) => {
        let className = disc.icon
          ? "ion-ios-checkmark-empty iconsmall"
          : "ion-ios-close-empty iconsmall";
        data += `<li><i class='${className}'></i> ${disc.text}</li>`;
      });
      data += `</ul>
               </div>
               <div>
                  <button class="btn btn-ghost" data-id='${i}' onClick=test(${i},'${listType}') >View</button>
              </div>
          </div>
      </div>`;
    }
    return data;
  };






const createRecents = () => {
  let cookie = document.cookie.split("&");
  let i = 0;
  let j = cookie.length - 1;
  let recents = new Set([]);
  while (i < 5 && j > 0) {
    if (!recents.has(cookie[j])) {
      recents.add(cookie[j]);
      i++;
    }
    j--;
  }
  console.log(recents.size);
  let objectToSend = [];
  if (recents.size > 0) {
    console.log("hello");
    recents.forEach((element) => {
      let testData = element.split("@");
      if (testData[1] === "meals") {
        objectToSend.push(mealPlans[testData[0]]);
      } else {
        objectToSend.push(otherProducts[testData[0]]);
      }
    });
    if (objectToSend.length > 1) {
      document.getElementById("recents").innerHTML = setRecent(objectToSend);
    } else {
      document.getElementById("recents").innerHTML = "No recently viewed items";
    }
  }else{
    document.getElementById("recents").innerHTML = "No recently viewed items";
  }
};

const setRecent = (informationList) => {
  let data = "";

  colClass = "col span-1-of-5";
  for (let i = 0; i < informationList.length; i++) {
    data += `<div class='${colClass}'>
                          <div class="plan-box">
                              <div>
                                  <h3>${informationList[i].name}</h3>
                                  `;
    data += `<p class="plan-price">$${informationList[i].amount}</p>`;
    data += `
                              </div>
                              <div>
                         
                          <ul>
                         `;
    informationList[i].discription.forEach((disc) => {
      let className = disc.icon
        ? "ion-ios-checkmark-empty iconsmall"
        : "ion-ios-close-empty iconsmall";
      data += `<li><i class='${className}'></i> ${disc.text}</li>`;
    });
    data += `</ul>
                   </div>
                   
              </div>
          </div>`;
  }
  return data;
};

const mostVisted = () => {
  let cookie = document.cookie.split("&");
  let i = 0;
  let j = 1;
  let mostVisits = new Set([]);
  var counts = {};
  cookie.forEach(function (x) {
    counts[x] = (counts[x] || 0) + 1;
  });

  const sortable = Object.fromEntries(
    Object.entries(counts).sort(([, a], [, b]) => a - b)
  );
  console.log(sortable);
  keysSorted = Object.keys(counts).sort(function (a, b) {
    return counts[b] - counts[a];
  });
  console.log(keysSorted);
  let objectToSend = [];
  if (keysSorted.length > 0) {
    console.log("hello");
    for (let k = 0; k < 5; k++) {
      let testData = keysSorted[k].split("@");
      if (testData[1] === "meals") {
        objectToSend.push(mealPlans[testData[0]]);
      }
      if (testData[1] === "otherProd") {
        objectToSend.push(otherProducts[testData[0]]);
      }
    }
    if (objectToSend.length > 0) {
      document.getElementById("frequents").innerHTML = setRecent(objectToSend);
    } else {
      document.getElementById("frequents").innerHTML =
        "No frequently viewed Items";
    }
  }else{
    document.getElementById("frequents").innerHTML =
    "No frequently viewed Items";
  }
  console.log("check");
  console.log(counts);
  //   console.log(mostVisits)
};

document.getElementById("mealPlanID").innerHTML = setData(mealPlans, "meals");
document.getElementById("otherProductsID").innerHTML = setData(
  otherProducts,
  "otherProd"
);

createRecents();
mostVisted();

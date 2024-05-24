var formdata = new FormData();
formdata.append("type", "Horizontal Strip");
formdata.append("tags", "labware,music,part,VW,Volkswagen,ps5,stereo,headphones,");

var ajax = new XMLHttpRequest();
ajax.addEventListener("load", completeHandler, false);

ajax.open("POST", "https://ad.simaneka.com/api/get");
ajax.setRequestHeader("authorisation", "C5FQ1lJK0rVvJXh3h7cTtZbRvHsz7vqt");

ajax.send(formdata);

function completeHandler(event) {
    var response = JSON.parse(event.target.responseText);

    console.log(response);
    document.querySelector('.advertIMG').src = response.link;
    document.querySelector('.advertIMG').alt = response.alt;
    document.querySelector('.anchorElement').href = response.href;
    document.querySelector('.headerText').innerHTML = response.message;
}



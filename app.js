

const myButton = document.getElementById("submit_button");

function show_alert_message(x)
{
		x.style.backgroundColor = "lightpink";	
		alert("Veuillez remplir les champs en rouge");
}

myButton.addEventListener('click', () => {

		var fa_name = document.getElementById("fa_name");
		var fa_mail = document.getElementById("fa_mail");
		var	sending_date = document.getElementById("sending_date");
		var id_name = document.getElementById("id_name");

		var requiredList = [];

		requiredList.push(fa_name);
		requiredList.push(fa_mail);
		requiredList.push(sending_date);
		requiredList.push(id_name);

		for (let i = 0 ; i <requiredList.length ; i += 1)
		{
				if (requiredList[i].value == "")
				{
						requiredList[i].style.backgroundColor = "lightpink";
						alert("Veuillez remplir les champs en rouge");
				}
		}
		window.open('mailto:registre@humanima.be');
});

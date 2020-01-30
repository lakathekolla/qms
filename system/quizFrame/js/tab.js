function openForm(evt, nameForm) {
				var i, tabcontent, formlinks;
				tabcontent = document.getElementsByClassName("tabcontent");
					for (i = 0; i < tabcontent.length; i++){
						tabcontent[i].style.display = "none";
				}
				formlinks = document.getElementsByClassName("formlinks");
					for (i = 0; i < formlinks.length; i++) {
						formlinks[i].className = formlinks[i].className.replace(" active", "");
				}
				document.getElementById(nameForm).style.display = "block";
				evt.currentTarget.className += " active";
			}
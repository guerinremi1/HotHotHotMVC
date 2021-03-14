$( document ).ready(function() {
	function alertext(num){
		$.getJSON('json/alerte.json',function(alert) {
			$(".alerteExt").html(alert.alerte[num].nom);
		});
	}
	function alertint(num){
		$.getJSON('json/alerte.json',function(alert) {
			$(".alerteInt").html(alert.alerte[num].nom);
		});
	}

	function start(){
		$.ajax({
			url : 'getContentInJson.php',
			type : 'GET',
			success : function(){
				$.getJSON('json/donnees.json',function(donnees){
					let donneeCaptExt = donnees[donnees.length - 1].ext;
					let donneeCaptInt = donnees[donnees.length - 1].int;

					$('#capteurExt h3').html(donneeCaptExt+'&#8451');
					$('#capteurInt h3').html(donneeCaptInt+'&#8451');

					if (donneeCaptExt > 35) {
						alertext(0)
					}		if (donneeCaptExt < 0) {
						alertext(1)
					}		if (donneeCaptExt > 22) {
						alertext(2)
					}		if (donneeCaptExt > 50) {
						alertext(3)
					}		if (donneeCaptExt < 12) {
						alertext(4)
					}

					if (donneeCaptInt > 35) {
						alertint(0)
					}		if (donneeCaptInt < 0) {
						alertint(1)
					}		if (donneeCaptInt > 22) {
						alertint(2)
					}		if (donneeCaptInt > 50) {
						alertint(3)
					}		if (donneeCaptInt < 12) {
						alertint(4)
					}

					tabext=[]
					tabint=[]
					for (let i in donnees){
						if (donnees[i].date.substr(0, 10) === donnees[donnees.length - 1].date.substr(0, 10)){
							tabext.push(donnees[i].ext)
							tabint.push(donnees[i].int)
							$('.minExterieur').html(Math.min(...tabext)+'&#8451')
							$('.maxExterieur').html(Math.max(...tabext)+'&#8451')
							$('.minInterieur').html(Math.min(...tabint)+'&#8451')
							$('.maxInterieur').html(Math.max(...tabint)+'&#8451')
						}
					}

					$('.capteur').on('click', function (){
						let extOuInt = $(this).data('capteur');

						$( "#black, #popup" ).addClass( "visable" );
						$('#popup h2').html(extOuInt);

						if(extOuInt == 'Exterieur'){
							$('#popup .alerte').html($(".alerteExt").html())
							$('#popup h3').html($("#capteurExt h3").html())
						}else{
							$('#popup .alerte').html($(".alerteInt").html())
							$('#popup h3').html($("#capteurInt h3").html())
						}
						$('.historique').empty();
						tabDate = []
						for (let i in donnees){
							tabDate.push(donnees[i].date.substr(0, 10));
						}
						tabDate = Array.from(new Set(tabDate));
						$.each( tabDate, function( key, value ) {
							$('.historique').append(
								$('<section class="date"></section>').html(value)
							)
						});

						$('.date').on('click', function (){
							$('.historique2').css('display', 'flex');
							$('.historique2').empty();
							for (let i in donnees){
								if (donnees[i].date.substr(0, 10) === $(this).html()){
									if(extOuInt == 'Exterieur'){
										$('.historique2').append(
											$('<section class="barre"></section>').css('height' , donnees[i].ext*3+'%').html('<p>'+donnees[i].ext + '</p>'+ '<p>'+donnees[i].date.substr(10)+'</p>')
										)
										$('.historique').css('display', 'none');
									}else{
										$('.historique2').append(
											$('<section class="barre"></section>').css('height' , donnees[i].int*3+'%').html('<p>'+ donnees[i].int + '</p>'+ '<p>'+donnees[i].date.substr(10)+'</p>')
										)
										$('.historique').css('display', 'none');
									}
								}
							}
						});

					});
				});
			}
		});
		setInterval(start, 3600000);
	}

	start();

	$( "#black, .close" ).click(function() {
		$( "#black, #popup" ).removeClass( "visable" );
		$('.historique').css('display', 'flex');
		$('.historique2').css('display', 'none');
	});


	$(".navigation").on('click',function (){
		document.location.href= $(this).data('nav');
	});


});
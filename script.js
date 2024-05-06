var voice_types;

$(function(){

	if ( typeof SpeechSynthesisUtterance === 'undefined' ) {
		$('#target_text').val("Web Speech API は使えません");
	}

	// 詳細取得
	get_voice_type ( );
	if (speechSynthesis.onvoiceschanged !== undefined) {
		speechSynthesis.onvoiceschanged = get_voice_type ;
	}
	$("#speech_button").on("click", function() {

		var speech = new SpeechSynthesisUtterance($("#target_text").val());
		// 選択した言語を使う
		speech.voice = voice_types[ $('#voice option:selected').val() ];
		speechSynthesis.speak(speech);

	});


});

function get_voice_type ( ) {
	voice_types = speechSynthesis.getVoices();
	$('#voice > option').remove();
	for( i = 0; i < voice_types.length; i++) {
		$('#voice').append($('<option>').text(voice_types[i].name).val(i));
	}
}
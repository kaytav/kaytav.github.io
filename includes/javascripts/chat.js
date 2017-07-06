




/*
     FILE ARCHIVED ON 17:16:03 Jul 4, 2007 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 9:00:07 Aug 24, 2016.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
// Page initialization
function initialize () {
	
	// Ajax call used to update chat contents
	updateChat = new Ajax('chat.php', {
		method: 'post',
		postBody: 'mode=updateChat',
		onComplete: updateChatComplete
	}).request();
	
}

// Function called on completion of updatChat ajax request
function updateChatComplete(response) {
	// Evaluate the Json data returned from the ajax request
	chatObject = Json.evaluate(response);
	// If there is new chat data
	if(chatObject.chatData) {
		// Iterate over it
		chatObject.chatData.each(function(chatData){
			// If there was an answer in the data then this was a question
			if(chatData.answer) {
				// Format it
				var newDiv = new Element('div').addClass('question');
				new Element('p').addClass('what').setHTML('Question').injectInside(newDiv);
				new Element('p').addClass('who').setHTML('submitted by ' + chatData.whoSubmitted).injectInside(newDiv);
				new Element('p').addClass('content').setHTML(chatData.content).injectInside(newDiv);
				new Element('p').addClass('what').setHTML('Answer').injectInside(newDiv);
				new Element('p').addClass('who').setHTML('from ' + chatData.whoAnswered).injectInside(newDiv);
				new Element('p').addClass('content').setHTML(chatData.answer).injectInside(newDiv);
			// Else this was a comment
			} else {
				// Format it
				var newDiv = new Element('div').addClass('comment');
				new Element('p').addClass('what').setHTML('Comment').injectInside(newDiv);
				new Element('p').addClass('who').setHTML('from ' + chatData.whoSubmitted).injectInside(newDiv);
				new Element('p').addClass('content').setHTML(chatData.content).injectInside(newDiv);
			}
			// Inject the new content into the chat
			newDiv.injectAfter('chatStart');
			// Highlight it so the user knows the page has been updated
			var myFx = new Fx.Style(newDiv, 'background-color');
			myFx.start("#FFFF99").chain(function(){
				myFx.start("#FFFFFF");
			});
		});
	}
	
	// If user has submitted questions	
	if(chatObject.myData) {
		$('myDataContainer').setHTML('');
		// Iterate over them
		chatObject.myData.each(function(myData){
			// Check the status of the question or comment
			switch(myData.status) {
				case '1':
					myData.status = 'approved for possible inclusion into chat';
					break;    
				case '2':
					myData.status = 'added to chat';
				 	break;
				default:
					myData.status = 'awaiting moderation';
			}
			// Format it
			var newDiv = new Element('div').setProperty('id', 'myData');		
			new Element('p').addClass('who').setHTML('you submitted').injectInside(newDiv);
			new Element('p').addClass('content').setHTML(myData.content).injectInside(newDiv);
			new Element('p').addClass('status').setHTML('status').injectInside(newDiv);
			new Element('p').addClass('content').setHTML(myData.status).injectInside(newDiv);
			// Inject it into the my data div
			newDiv.injectInside('myDataContainer');	
		});		
	}
	
	// Wait a few seconds then make the ajax request again
	updateChat.request.delay(7000, updateChat);

}

// Function used to submit a question OR comment
function submitContent() {
	// Submit only if user has typed in input box
	if($('submitContentInput').getValue())
	{
		// Submit it for insertion into db 
		new Ajax('chat.php', {
			method: 'post',
			postBody: $('submitContentForm'),
			onComplete: function() {
				// Clear the input box
				$('submitContentInput').value = '';
			}
		}).request();
	// Else flash the input box so user knows its required
	} else {
		var myFx = new Fx.Style('submitContentInput', 'background-color');
		myFx.start("#FFFF99").chain(function(){
			myFx.start("#FFFFFF");
		});
	}
	
	return false;
	
}

					
// When the dom is ready call the page initialization function	
window.addEvent('domready', initialize);
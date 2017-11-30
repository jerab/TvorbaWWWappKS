var html5Elements = 'p, div, a[href]]';
tinymce.init({
	selector: 'textarea#text',
	width : 600,
	height : 400,
	menubar: false,
	plugins: [
		'advlist autolink lists link image charmap print preview anchor textcolor',
		'searchreplace visualblocks code fullscreen',
		'insertdatetime media table contextmenu paste code help'
	],
	toolbar1: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent |' +
	' removeformat | help',
	toolbar2 : 'styleselect removeformat',
	content_css: [],

	valid_elements : html5Elements,

	style_formats: [{title: 'Nadpisy', items: [
						{title: 'h2', block: 'h2'},
						{title: 'h3', block: 'h3'},
						{title: 'h4', block: 'h4'},
						{title: 'h5', block: 'h5'},
						{title: 'h6', block: 'h6'}
					]},
					{title: 'Bloky', items: [
						{title: 'p', block: 'p'},
						{title: 'div', block: 'div', wrapper: true}
					]},
					{title : 'Odkaz', inline: 'a'}
					]

});

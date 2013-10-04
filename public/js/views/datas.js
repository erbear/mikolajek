var app = app || {};

app.DataView = Backbone.View.extend({
	tagName: 'li',
	template: _.template($('#OneData'));
	
});
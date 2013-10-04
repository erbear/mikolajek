var app = app || {};

var DataList = Backbone.Collection.extend({
	model: app.Data,
	url: function() {
    	return this.document.url() + '/download';
  	}
});

app.Datas = new DataList();
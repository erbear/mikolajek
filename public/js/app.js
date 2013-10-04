
$(document).ready(function(){
	var Data = Backbone.Model.extend({
		defaults:
		{
			id: '0',
			email: 'pusto',
			tel: 'w zyciu nie bylo tak pusto'
		},
		urlRoot: 'download',
	});


	var DataCollection = Backbone.Collection.extend({
		model: Data,
		url: 'downloads',
		initialize: function(){
			this.on('remove', this.hideItem);
		},
		hideItem:function(item){
			item.trigger('hide');
		}
	});


	var DataView = Backbone.View.extend({
		template: _.template($('#one-data').html()),
		events: {
			'click .remove': 'remove',
			'dblclick .email': 'edit',
			'blur .edit input': 'close'

		},
		initialize: function(){
			this.listenTo(this.model, 'change', this.render);
			this.listenTo(this.model, 'hide', this.remove);
		},


		render: function(){
			this.$el.html(this.template(this.model.toJSON()))
		},
		dodaj: function(){
				this.render();
				$('#dodatkowe').append(this.el);
		},
		remove: function(){
			this.$el.remove();
		},
		edit: function(){
			this.$('.email').hide();
			this.$('.edit').show();
		},
		close: function(){
			var value = this.$('.edit input').val();
			console.log(value);
			this.$('.email').show();
			this.$('.edit').hide();
			this.model.set({email: value});
		}
	});



	var DataCollectionView = Backbone.View.extend({
		initialize: function(){
			this.collection.on('add', this.addOne, this);
			this.collection.on('reset', this.addAll, this);
		},
		render: function(){
			this.addAll();
		},
		addOne: function(item){
			var dataView = new DataView({model: item});
			dataView.dodaj();
			console.log(item.toJSON());
		},
		addAll: function(){
			this.collection.forEach(this.addOne, this);
		},
	});

	var data = new Data();
	var dataList = new DataCollection();
	var app = new DataCollectionView({collection: dataList});
	dataList.fetch();
});
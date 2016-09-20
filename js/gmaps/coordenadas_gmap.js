// JavaScript Document

$(function() { 
	demo.add(function() {
		$('#map_canvas').gmap({
			'center': '19.944956,-103.757447',
			'zoom': 18,
			'disableDefaultUI':false,
			'callback': function() {
			var self = this;
			self.addMarker({'position': this.get('map').getCenter() }).click(function() {
				self.openInfoWindow({ 'content': '3Rs de México' }, this);
			});	
		}});
	}).load();
});
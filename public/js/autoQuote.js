// global variables
var _currentVehicleId = 1;

$(function() {
	// prepend a blank option for the Date of Birth month and year fileds
	$('.dateOfBirthMonth').prepend($('<option value="" selected="selected">Month</option>'));
	$('.dateOfBirthYear').prepend($('<option value="" selected="selected">Year</option>'));

	$('#addDriver').on('click', function() {
		var $insuredDrivers = $('#insuredDrivers');
		var $insuredDriversTemplate = $('#insuredDriversTemplate').clone(true);
		var currentDriverId = Number($insuredDriversTemplate.data('driverId'));
		var newDriverId = currentDriverId + 1;
		var $currentDriver = $insuredDrivers.find('.insuredDriver[data-driver-id="' +  currentDriverId + '"] .edit');

		if (driverIsValid(currentDriverId)) {
			updateItemId($insuredDriversTemplate, 0, newDriverId);

			// update cloned template to have correct attributes and class names
			$insuredDriversTemplate
				.data('driverId', newDriverId)
				.attr('data-driver-id', newDriverId)
				.removeAttr('id')
				.removeClass('hide')
				.addClass('insuredDriver');

			// increment the driver id on the template
			$('#insuredDriversTemplate').data('driverId', newDriverId).attr('data-driver-id', newDriverId);

			// get name of the current driver to be used with the read-only view
			var firstName = $('#firstName_' + currentDriverId).val();
			var lastName = $('#lastName_' + currentDriverId).val();

			// hide the current driver and add the new driver
			$currentDriver.addClass('hide');
			$currentDriver.parents('.insuredDriver').find('.readOnly').removeClass('hide').find('span.driverName').text(firstName + ' ' + lastName);
			$insuredDrivers.append($insuredDriversTemplate);
		}
	});

	$('.dateOfBirthMonth').on('change', function() {
		var $this = $(this);
		var $daysInMonthField = $this.parents('.dateOfBirthRow').find('.dateOfBirthDay');
		var month = $this.val();
		var year = (new Date()).getFullYear();

		$daysInMonthField.children().remove();
		
		if (month) {
			/* Note: The month is one based.
			 * Since JavaScript uses a zero based month, but Laravel uses a one based month,
			 * we are using the one based month, then getting the zeroth day of the month. This gives us the number of
			 * days in JavaScript format's current month
			*/
			var daysInMonth = (new Date(year, month, 0)).getDate();
			for (var i = 1; i <= daysInMonth; i++) {
				$daysInMonthField.append($('<option></option>').val(i).text(i));
			}
		} else {
			$daysInMonthField.append($('<option value="" selected="">Day</option>'));
		}
	});

	$('div.readOnly .editDriver').on('click', function() {
		var $thisDriver = $(this).parents('.insuredDriver');
		var driverId = $thisDriver.data('driverId');
		if ($thisDriver.find('.edit').is(':visible')) {
			if (driverIsValid(driverId)) {
				$('#firstName_' + driverId).parents('.row:first').removeClass('hide');
				$('#lastName_' + driverId).parents('.row:first').removeClass('hide');
				$thisDriver
					.removeClass('expanded')
					.find('.edit').addClass('hide');
			}
		} else {
			$('#firstName_' + driverId).parents('.row:first').addClass('hide');
			$('#lastName_' + driverId).parents('.row:first').addClass('hide');
			$thisDriver
				.addClass('expanded')
				.find('.edit').removeClass('hide');
		}
	});

	$('div.readOnly .removeDriver').on('click', function() {
		if (confirm('Are you sure you want to remove this driver?')) {
			$(this).parents('.insuredDriver').remove();
		}
	});

	$('#addVehicle').on('click', function() {
		var nextVehicleId = _currentVehicleId + 1;
		var $vehicles = $('#vehicles');
		var $currentVehicle = $vehicles.find('.vehicle[data-vehicle-id="' + _currentVehicleId + '"]');

		if (vehicleIsValid(_currentVehicleId)) {
			var $vehicleTemplate = $currentVehicle.clone(true);
			updateItemId($vehicleTemplate, _currentVehicleId, nextVehicleId);

			// update vehicle template to have correct vehicle ID
			$vehicleTemplate
				.data('vehicleId', nextVehicleId)
				.attr('data-vehicle-id', nextVehicleId)
				.find('input,select,textarea').val('');

			// get year, make, and model for the read-only view
			year = $('#vehicleYear_' + _currentVehicleId).val();
			make = $('#make_' + _currentVehicleId).val();
			model = $('#model_' + _currentVehicleId).val();

			// update current vehicle and add the new vehicle
			// Also hide "year, make, model" row (first row) of vehicle so it can not be changed
			$currentVehicle.find('.editVehicle').addClass('hide').find('.row:first').addClass('hide');
			$currentVehicle.find('.readOnlyVehicle').removeClass('hide').find('span.vehicleDescription').text(year + ' ' + make + ' ' + model);
			$vehicles.append($vehicleTemplate);

			_currentVehicleId++;
		}
	});

	$('div.readOnlyVehicle .editVehicleIcon').on('click', function() {
		$thisVehicle = $(this).parents('.vehicle');
		if ($thisVehicle.hasClass('expanded')) {
			if (!vehicleIsValid($thisVehicle.data('vehicleId'))) {
				return;
			}
		}
		$thisVehicle
			.toggleClass('expanded')
			.find('.editVehicle').toggleClass('hide');
	});

	$('div.readOnlyVehicle .removeVehicle').on('click', function() {
		if (confirm('Are you sure you want to remove this vehicle?')) {
			$(this).closest('.vehicle').remove();
		}
	});

	$('#btnCancel').on('click', function() {
		location.reload();
	});
});

function driverIsValid(driverId) {
	var isValid = true;
	var $driver = $('.insuredDriver[data-driver-id="' + driverId + '"]');
	
	// remove error classes
	$driver.find('.errorField').removeClass('errorField');
	$driver.find('.errorLabel').removeClass('errorLabel');

	// validate all visible add driver fields
	$driver.find('.required').each(function() {
		var $this = $(this);
		if (!$this.val()) {
			$this.addClass('errorField');
			$this.siblings('label').addClass('errorLabel');
			isValid = false;
		}
	});

	if ($driver.find('.dateOfBirthRow .errorField').length) {
		$driver.find('.dateOfBirthLabel').addClass('errorLabel');
	}
	return isValid;
}

function vehicleIsValid(vehicleId) {
	var isValid = true;
	var $vehicle = $('.vehicle[data-vehicle-id="' + vehicleId + '"]');
	
	// remove error classes
	$vehicle.find('.errorField').removeClass('errorField');
	$vehicle.find('.errorLabel').removeClass('errorLabel');

	// validate all visible add vehicle fields
	$vehicle.find('.required').each(function() {
		var $this = $(this);
		if (!$this.val()) {
			$this.addClass('errorField');
			$this.siblings('label').addClass('errorLabel');
			isValid = false;
		}
	});

	return isValid;
}

function updateItemId($item, oldId, newId) {
	// update item name and id attributes to have the new id
	$item.find('[name$="_' + oldId + '"]').each(function() {
		var $this = $(this);
		var newName = $this.attr('name').split('_')[0] + '_' + newId;
		$this.attr('name', newName);
		if ($this.attr('id')) {
			var newIdText = $this.attr('id').split('_')[0] + '_' + newId;
			$this.attr('id', newIdText);
		}
	});

	// update item "for" attribute to have the new id
	$item.find('label[for$="_' + oldId + '"]').each(function() {
		var $this = $(this);
		var newName = $this.attr('for').split('_')[0] + '_' + newId;
		$this.attr('for', newName);
	});
}

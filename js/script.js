var input = document.querySelector("#telephone");
window.intlTelInput(input, {
    allowDropdown:true,
    autoHideDialCode:true,
    autoPlaceholder:"polite",
    geoIpLookup:null,
    preferredCountries: ["bd","us" ],
});

function isNumberKey(evt)
{
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
	return false;

	return true;
};


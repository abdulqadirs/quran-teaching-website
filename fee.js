function selection()
{

var e = document.getElementById("selectcurrency");
var country = e.options[e.selectedIndex].value;
if(country=="usa")
{
    document.getElementById("top-heading").innerHTML="Monthly Free for USA & Canada";
    document.getElementById("twodays").innerHTML="$25";
    document.getElementById("threedays").innerHTML="$35";
    document.getElementById("fivedays").innerHTML="$55";
}
else if (country=="uk")
{
    document.getElementById("top-heading").innerHTML="Monthly Free for UK";
    document.getElementById("twodays").innerHTML="&pound;15";
    document.getElementById("threedays").innerHTML="&pound;20";
    document.getElementById("fivedays").innerHTML="&pound;30";
}
else if (country=="europe")
{
    document.getElementById("top-heading").innerHTML="Monthly Free for Europe";
    document.getElementById("twodays").innerHTML="&euro;15";
    document.getElementById("threedays").innerHTML="&euro;20";
    document.getElementById("fivedays").innerHTML="&euro;30";
}


}
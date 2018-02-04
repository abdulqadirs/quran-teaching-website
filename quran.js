var quran = {
  para1: [1, 20],
  para2: [21, 38],
  para3: [39, 56],
  para4: [57, 74],
  para5: [75, 92],
  para6: [93, 110],
  para7: [111, 128],
  para8: [129, 146],
  para9: [147, 164],
  para10: [165, 182],
  para11: [183, 200],
  para12: [201, 218],
  para13: [219, 236],
  para14: [237, 254],
  para15: [255, 272],
  para16: [273, 290],
  para17: [291, 308],
  para18: [309, 326],
  para19: [327, 344],
  para20: [345, 362],
  para21: [363, 380],
  para22: [381, 398],
  para23: [399, 416],
  para24: [417, 434],
  para25: [435, 452],
  para26: [453, 470],
  para27: [471, 488],
  para28: [489, 508],
  para29: [509, 528],
  para30: [529, 549]
};
var folder="holyquran";
var extension="jpg";
var subfolder;
var name;
var min, max, iterator;
$(document).ready(function () {
  $(".chapter").click(function () {
    name = $(this).attr('id');
  });
  min = quran[name][0];
  max = quran[name][1];
  subfolder=name;
  $("#quran-page").attr('src',folder+'/'+subfolder+'/'+min+'.'+extension);
  iterator = min;
  $(".fa-arrow-circle-o-left").click(function () {
    if (iterator == min) {
      iterator=min;
      $("#quran-page").attr('src',folder+'/'+subfolder+'/'+min+'.'+extension);
    } else if (iterator > min) {
      iterator--;
      $("#quran-page").attr('src',folder+'/'+subfolder+'/'+iterator+'.'+extension);
    }
  });
  $(".fa-arrow-circle-o-right").click(function () {
    if (iterator == max) {
      iterator=max;
      $("#quran-page").attr('src',folder+'/'+subfolder+'/'+max+'.'+extension);
    } else if (iterator < max) {
      iterator++;
      $("#quran-page").attr('src',folder+'/'+subfolder+'/'+iterator+'.'+extension);
    }
  });
  // $("#para").text(folder+'/'+subfolder+'/'+iterator+extension);
});
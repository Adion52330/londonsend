function validation() {
  a = document.getElementById("oo").value;
  b = document.getElementById("ht").value;
  if (a > 12 || a < 7) {
    document.getElementById("p1").innerHTML =
      "Your class can't be more than 12 or less than 7";
    return false;
  } else if (b == "") {
    document.getElementById("p2").innerHTML =
      "You have to at least write 'none'";
    return false;
  } else {
    document.getElementById("p2").style.display = "none";
    document.getElementById("p1").style.display = "none";
    return true;
  }
}

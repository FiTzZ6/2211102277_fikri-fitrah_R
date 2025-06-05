void main() {
  var fixedList = List<int>.filled(3, 0); //Fixed
  fixedList[0] = 12;
  fixedList[1] = 13;
  fixedList[2] = 11;
  print(fixedList);

  var growList = <int>[]; //Growable
  growList.add(14);
  growList.add(15);
  growList.add(16);
  growList[0] = 17;

  print(growList);
}
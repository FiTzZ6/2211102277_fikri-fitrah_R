import 'package:flutter/material.dart';

class Containers extends StatelessWidget {
  const Containers({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        backgroundColor: Colors.blueAccent,
        title: Text("Modul - 4"),
      ),
      body: Center(
        child: Container(
          margin: EdgeInsets.all(10),
          color: Colors.amber[600],
          width: 48,
          height: 48,
        ),
      ),
    );
  }
}
import 'package:flutter/material.dart';

class Rows extends StatelessWidget {
  const Rows({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        backgroundColor: Colors.amberAccent,
        title: Text("Modul - 5"),
      ),
      body: Row(
        children: <Widget>[
          const FlutterLogo(),
          const Expanded(
            child: Text(
              "Flutter's hot reload helps you quickly and easily experiment, build UIs, add features, and fix bug faster. Experience sub-second reload times, without losing state, on emulators, simulators, and hardware for iOS and Android.",
            ),
          ),
          const Icon(Icons.sentiment_very_satisfied),
        ],
      ),
    );
  }
}
# Base of Flutter

## Get packages for an existing flutter project.
- flutter pub get


## Give access to the gradlew user.
- chmod a+rx android/gradlew

## Sometimes you get old app instead of new app that is due to the caching of build folder that creates "APK" from old code.
- Run `Flutter clean`
- and then `flutter run` or `flutter build apk`

## Making a Release build for playstore.
- Try to make appbundles as they are compatible with 32 and 64 bit `flutter build appbundle`
- `Always remember that new release version should be greater than the last available.`

## Firebase Push Notification in flutter
 - Do all the things Written here[https://pub.dev/packages/firebase_messaging#-readme-tab-]
 
## A very informal Article for code shrinker of flutter.
 - https://medium.com/@olawale_alabi/android-flutter-64k-methods-dex-limit-how-to-use-proguard-in-development-728af11a4e22
 
## Playing With Flutter(Do not play I repeat Do not play with Gradle in flutter or In Android)
 - Keep this in Mind https://developer.android.com/studio/releases/gradle-plugin.html#updating-gradle
 - When you update your exising flutter project or any Android Project just sync gradle and don't put NonCompatible versions.
 - Gradle versions should be in sync update it `Very Very Carefull`.

## Some amazing resources on FLutter.
- [Link](https://flutterawesome.com/a-nice-flutter-furniture-app/)

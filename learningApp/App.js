import { StatusBar } from 'expo-status-bar';
import React, { useState } from 'react';
import { StyleSheet, Text, View, TextInput } from 'react-native';

export default function App() {
  return (
    <View style={styles.container}>
      <Text style={styles.title}>Welcome to school id ! {'\n'}
      </Text> 
      <Image source={require('assets/splash.png')} style={{ width: 200, height: 200 }} />
     
      <TextInput style={{
          height: 40,
          width: 300,
          borderColor: 'gray',
          borderWidth: 1
        }}
        defaultValue="Masukan nama sekolah..."
      ></TextInput>
      <StatusBar style="auto" />
    </View>
  );
}


const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',

  },
  title: {
    color:'gray',
    fontSize: 30,
  },
});

const NamaSekolah = () =>{
  const [value, onChangeText] = React.useState('Masukan nama sekolah..');
  return(
          <TextInput style={{
          height: 40,
          width: 300,
          borderColor: 'gray',
          borderWidth: 1
        }}
        value={value}
      ></TextInput>
  );
}

import { StatusBar } from 'expo-status-bar';
import React, { useState } from 'react';
import { StyleSheet,Image, Button, View, SafeAreaView, Text, Alert, TextInput, Inputs } from 'react-native';
NamaSekolah='';
export default function App() {
  return (
    <View style={styles.container}>
      <Text style={styles.title}>Selamat datang di school id!{'\n'}</Text> 
      { <Image source={require('./assets/opening.png')} style={{ width: 200, height: 200 }}/> }
      <TextInput style={{
          height: 40,
          width: 300,
          borderColor: 'gray',
          borderWidth: 1
        }}
        placeholder="Masukan nama sekolah..."
         onChangeText={NamaSekolah => setText(NamaSekolah)}
         defaultValue={NamaSekolah}
      ></TextInput>
      <Text>{'\n'}</Text>
      <Button 
        title="Lanjutkan"
        color='blue'
        onPress={() => Alert.alert('Simple Button pressed')}
      />
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

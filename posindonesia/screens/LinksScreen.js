import React from 'react';
import { ScrollView, StyleSheet, View } from 'react-native';
import { MapView } from "expo";

export default class LinksScreen extends React.Component {
  static navigationOptions = {
    title: 'Track Barang',
      headerStyle: {
          backgroundColor: '#eb5f27',
      },
  };

  render() {
    return (
        <MapView
      style={{
          flex: 1
      }}
      initialRegion={{
          latitude: 37.78825,
              longitude: -122.4324,
              latitudeDelta: 0.0922,
              longitudeDelta: 0.0421
      }}
      />
    );
  }
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    paddingTop: 15,
    backgroundColor: '#fff',
  },
});

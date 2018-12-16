import React from 'react';
import { ScrollView, StyleSheet, TextInput, Image, View, Text } from 'react-native';
import {widthPercentageToDP as wp, heightPercentageToDP as hp} from 'react-native-responsive-screen';
import { Button, FormInput, Icon, Input} from 'react-native-elements';


export default class InfoAcaraScreen extends React.Component {
    static navigationOptions = {
        header: null,
    };
    render() {
        return (
            <ScrollView style={styles.container}>
                <Image

                    style={{resizeMode:'cover', width:wp('100%'), height:hp('50%'), position:'relative'}}
                    source={require('../assets/images/HeaderLogin1.png')}
                />
                    <ScrollView style={styles.kontenLogin}>
                        {/*ini view input user*/}
                        <View style={{flex: 1, flexDirection: 'row'}}>
                            <View style={{justifyContent:'center'}}>
                                <Icon containerStyle={styles.icon}
                                    name='md-person'
                                    type='ionicon'
                                    color='rgba(116,120,119,0.7)'
                                />
                            </View>
                            <View style={{justifyContent:'center'}}>
                                <TextInput style = {styles.input}
                                           autoCapitalize="none"
                                           onSubmitEditing={() => this.passwordInput.focus()}
                                           autoCorrect={false}
                                           keyboardType='email-address'
                                           returnKeyType="next"
                                           placeholder="Username Or Email"
                                           placeholderTextColor='rgba(116,120,119,0.7)'/>
                            </View>
                        </View>

                        {/*ini view inpur password*/}
                        <View style={{flex: 1, flexDirection: 'row'}}>
                            <View style={{justifyContent:'center'}}>
                                <Icon containerStyle={styles.icon}
                                      name='ios-lock'
                                      type='ionicon'
                                      color='rgba(116,120,119,0.7)'
                                />
                            </View>
                            <View style={{justifyContent:'center'}}>
                                <TextInput style = {styles.input}
                                           returnKeyType="go"
                                           ref={(input)=> this.passwordInput = input}
                                           placeholder='Password'
                                           placeholderTextColor='rgba(116,120,119,0.7)'
                                           secureTextEntry/>
                            </View>
                        </View>

                        <Button
                        onPress={() => this.props.navigation.navigate('Main')}
                        title='LOGIN'
                        titleStyle={{color:'#dccf02'}}
                        buttonStyle={{
                            borderRadius: 5,
                            backgroundColor:'#eb5f27',
                            width:wp('92%'),
                        }}
                        />

                    </ScrollView>

            </ScrollView>
        );
    }
}

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: '#fff',
    },
    kontenLogin: {
        flex: 1,
        backgroundColor: '#fff',
        paddingTop:40,

    },
    icon:{
        marginLeft:10,
        marginBottom: 10,
        padding: 10,
        width:40,
        height:30,
    },
    input: {
        height: 40,
        width:wp('80%'),
        backgroundColor: 'rgba(220,220,220,0.2)',
        marginLeft:5,
        marginBottom: 10,
        padding: 10,
        color: '#000',
        /*marginHorizontal:30,*/
        borderRadius:5,
    },
});

import React, {Component} from 'react';
import {BackHandler, Image, ScrollView, StyleSheet, Text, TextInput, TouchableOpacity, View} from 'react-native';
import {widthPercentageToDP as wp, heightPercentageToDP as hp} from 'react-native-responsive-screen';
import ImagePicker from 'react-native-image-picker';


export default class ProfileScreen extends Component {

    static navigationOptions={
        title: 'Profil',
        headerStyle:{
          backgroundColor:'#eb5f27',
        },

    }

    constructor(props) {
        super(props)
        this.backPress = this.handleBackPress.bind(this)

        this.state = {
            avatarSource: '',
            backgroundSource: ''
        }
    }

    pickPhoto(isChangeAvatar) {
        let options = {
            title: 'Choose ',
            customButtons: [{name: 'fb', title: 'Choose Photo from Facebook'}],
            storageOptions: {
                skipBackup: true,
                path: 'images'
            }
        }

        ImagePicker.showImagePicker(options, response => {
            console.log('Response = ', response)

            if (response.didCancel) {
                console.log('User cancelled image picker')
            } else if (response.error) {
                console.log('ImagePicker Error: ', response.error)
            } else if (response.customButton) {
                console.log('User tapped custom button: ', response.customButton)
            } else {
                let source = {uri: response.uri}

                if (isChangeAvatar) {
                    this.setState({avatarSource: source})
                } else {
                    this.setState({backgroundSource: source})
                }
            }
        })
    }

    componentWillMount() {
        BackHandler.addEventListener('hardwareBackPress', this.backPress)
    }

    componentWillUnmount() {
        BackHandler.removeEventListener('hardwareBackPress', this.backPress)
    }

    handleBackPress() {
        this.props.navigation.goBack()
        return true
    }

    render() {
        return (
            <View style={styles.viewContainer}>

                {/* Change background */}
                <View style={{height: 101}}>
                    <Image
                        resizeMode="cover"
                        source={require('../assets/images/bg.png')}
                        style={{height:hp('30%'), width:wp('100%')}}
                    />

                </View>

                {/* Change avatar */}
                <View style={styles.imageAvatar}>
                    <Image
                        style={{height:hp('24%'), width:wp('42%'), marginTop:hp('-15%'), marginLeft:wp('-13%'), borderRadius: 120, borderColor:'white', borderWidth: 2.5}}
                        source={require('../assets/images/fb.jpg')
                        }
                    />

                </View>

                {/* Input field */}
                <View style={{flex: 1}}>
                    <ScrollView>
                        <View style={{margin: 10, flex: 1}}>
                            <View style={styles.viewItemInput}>
                                <Text style={styles.textTitleInput}>Nama Akun</Text>
                                <TextInput
                                    style={styles.textInput}
                                    underlineColorAndroid="rgba(0,0,0,0)"
                                    placeholder="Masukkan Nama Anda"
                                    placeholderTextColor="#aeaeae"
                                    returnKeyType="next"
                                    onSubmitEditing={() => {
                                        this.refs.countryInput.focus()
                                    }}
                                />
                                <View style={styles.viewBreakLine}/>
                            </View>

                            <View style={styles.viewItemInput}>
                                <Text style={styles.textTitleInput}>Tempat Tanggal Lahir</Text>
                                <TextInput
                                    ref="countryInput"
                                    style={styles.textInput}
                                    underlineColorAndroid="rgba(0,0,0,0)"
                                    placeholder="Masukkan Program Studi Anda"
                                    placeholderTextColor="#aeaeae"
                                    returnKeyType="next"
                                    onSubmitEditing={() => {
                                        this.refs.addressInput.focus()
                                    }}
                                />
                                <View style={styles.viewBreakLine}/>
                            </View>

                            <View style={styles.viewItemInput}>
                                <Text style={styles.textTitleInput}>Alamat</Text>
                                <TextInput
                                    ref="addressInput"
                                    style={styles.textInput}
                                    underlineColorAndroid="rgba(0,0,0,0)"
                                    placeholder="Masukkan Tahun Kelulusan Anda"
                                    placeholderTextColor="#aeaeae"
                                    returnKeyType="next"
                                    onSubmitEditing={() => {
                                        this.refs.aboutMeInput.focus()
                                    }}
                                />
                                <View style={styles.viewBreakLine}/>
                            </View>

                            <View style={styles.viewItemInput}>
                                <Text style={styles.textTitleInput}>No. HP</Text>
                                <TextInput
                                    ref="aboutMeInput"
                                    style={styles.textInput}
                                    underlineColorAndroid="rgba(0,0,0,0)"
                                    placeholder="Masukkan Status Anda"
                                    placeholderTextColor="#aeaeae"
                                    multiline={true}
                                />
                                <View style={styles.viewBreakLine}/>
                            </View>

                            <View style={styles.viewItemInput}>
                                <Text style={styles.textTitleInput}>Email</Text>
                                <TextInput
                                    ref="aboutMeInput"
                                    style={styles.textInput}
                                    underlineColorAndroid="rgba(0,0,0,0)"
                                    placeholder="Masukkan Pekerjaan Anda"
                                    placeholderTextColor="#aeaeae"
                                    multiline={true}
                                />
                                <View style={styles.viewBreakLine}/>
                            </View>

                            <TouchableOpacity style={styles.btnDone}>
                                <Text style={styles.textBtnDone}>DONE</Text>
                            </TouchableOpacity>
                        </View>
                    </ScrollView>
                </View>


            </View>
        )
    }
}

const styles = StyleSheet.create({
    viewContainer: {
        flex: 1
    },
    btnDone: {
        alignItems: 'center',
        justifyContent: 'center',
        height: 50,
        backgroundColor: '#eb5f27',
        borderRadius: 10,
        margin: 10
    },
    textBtnDone: {
        color: 'white',
        fontWeight: 'bold'
    },
    viewWrapAvatar: {
        width: 50,
        height: 50,
        alignSelf: 'center',
        marginTop: -30,
        marginBottom: 10
    },
    imageAvatar: {
        width: 50,
        height: 50,
        alignSelf: 'center',
        borderRadius: 25,
        marginTop: 20,
        marginBottom: 20
    },
    imageChangeAvatar: {
        width: 90,
        height: 90,
        borderRadius: 50
    },
    btnChangeAvatar: {
        width: 50,
        height: 50,
        backgroundColor: 'rgba(0,0,0,0.5)',
        borderRadius: 25,
        alignItems: 'center',
        justifyContent: 'center',
        position: 'absolute'
    },
    textTitleInput: {
        color: '#eb5f27'
    },
    textInput: {
        marginLeft: 10,
        marginRight: 10
    },
    viewItemInput: {
        marginTop: 10,
        marginBottom: 10
    },
    btnChangeBackground: {
        width: 40,
        height: 40,
        backgroundColor: 'rgba(0,0,0,0.5)',
        borderRadius: 20,
        alignSelf: 'flex-end',
        alignItems: 'center',
        justifyContent: 'center',
        position: 'absolute'
    },
    viewBreakLine: {
        width: '90%',
        height: 0.3,
        backgroundColor: 'grey',
        marginLeft: 10
    },
    icBack: {
        position: 'absolute',
        width: 23,
        height: 23,
        left: 26,
        top: 20
    }
});
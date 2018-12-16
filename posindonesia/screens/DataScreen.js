import React, {Component} from 'react';
import {BackHandler, Image, ScrollView, StyleSheet, Text, TextInput, TouchableOpacity, View} from 'react-native';
import {widthPercentageToDP as wp, heightPercentageToDP as hp} from 'react-native-responsive-screen';
import ImagePicker from 'react-native-image-picker';


export default class DataScreen extends Component {

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


                {/* Change avatar */}
                <View style={styles.imageAvatar}>
                    <Text style={{fontWeight: 'bold', fontSize: 20}}>Isi Data</Text>
                </View>

                {/* Input field */}
                <View style={{flex: 1}}>
                    <ScrollView>
                        <View style={{margin: 10, flex: 1}}>
                            <View style={styles.viewItemInput}>
                                <Text style={styles.textTitleInput}>Nama Pengirim</Text>
                                <TextInput
                                    style={styles.textInput}
                                    underlineColorAndroid="rgba(0,0,0,0)"
                                    placeholder="Masukkan Nama Pengirim"
                                    placeholderTextColor="#aeaeae"
                                    returnKeyType="next"
                                    onSubmitEditing={() => {
                                        this.refs.countryInput.focus()
                                    }}
                                />
                                <View style={styles.viewBreakLine}/>
                            </View>

                            <View style={styles.viewItemInput}>
                                <Text style={styles.textTitleInput}>Alamat Asal</Text>
                                <TextInput
                                    ref="aboutMeInput"
                                    style={styles.textInput}
                                    underlineColorAndroid="rgba(0,0,0,0)"
                                    placeholder="Masukkan Alamat Asal"
                                    placeholderTextColor="#aeaeae"
                                    returnKeyType="next"
                                    onSubmitEditing={() => {
                                        this.refs.countryInput.focus()
                                    }}
                                />
                                <View style={styles.viewBreakLine}/>
                            </View>

                            <View style={styles.viewItemInput}>
                                <Text style={styles.textTitleInput}>Nama Penerima</Text>
                                <TextInput
                                    ref="addressInput"
                                    style={styles.textInput}
                                    underlineColorAndroid="rgba(0,0,0,0)"
                                    placeholder="Masukkan Nama Penerima"
                                    placeholderTextColor="#aeaeae"
                                    returnKeyType="next"
                                    onSubmitEditing={() => {
                                        this.refs.aboutMeInput.focus()
                                    }}
                                />
                                <View style={styles.viewBreakLine}/>
                            </View>

                            <View style={styles.viewItemInput}>
                                <Text style={styles.textTitleInput}>Alamat Tujuan</Text>
                                <TextInput
                                    ref="aboutMeInput"
                                    style={styles.textInput}
                                    underlineColorAndroid="rgba(0,0,0,0)"
                                    placeholder="Masukkan Alamat Tujuan"
                                    placeholderTextColor="#aeaeae"
                                    returnKeyType="next"
                                    onSubmitEditing={() => {
                                        this.refs.countryInput.focus()
                                    }}
                                />
                                <View style={styles.viewBreakLine}/>
                            </View>

                            <View style={styles.viewItemInput}>
                                <Text style={styles.textTitleInput}>Jenis Barang</Text>
                                <TextInput
                                    ref="aboutMeInput"
                                    style={styles.textInput}
                                    underlineColorAndroid="rgba(0,0,0,0)"
                                    placeholder="Masukkan Jenis Barang Anda"
                                    placeholderTextColor="#aeaeae"
                                    returnKeyType="next"
                                    onSubmitEditing={() => {
                                        this.refs.countryInput.focus()
                                    }}
                                />
                                <View style={styles.viewBreakLine}/>
                            </View>

                            <View style={styles.viewItemInput}>
                                <Text style={styles.textTitleInput}>Kode Pos Tujuan</Text>
                                <TextInput
                                    ref="aboutMeInput"
                                    style={styles.textInput}
                                    underlineColorAndroid="rgba(0,0,0,0)"
                                    placeholder="Masukkan Kode Pos Tujuan"
                                    placeholderTextColor="#aeaeae"
                                    returnKeyType="next"
                                    onSubmitEditing={() => {
                                        this.refs.countryInput.focus()
                                    }}
                                />
                                <View style={styles.viewBreakLine}/>
                            </View>

                            <TouchableOpacity style={styles.btnDone} onPress={() => this.props.navigation.navigate('Home')} >
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
        width: 100,
        height: 50,
        alignSelf: 'center',
        borderRadius: 25,
        marginTop: 40,
        marginBottom: 5,

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
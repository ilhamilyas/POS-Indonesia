import React from 'react';
import { createSwitchNavigator, createStackNavigator } from 'react-navigation';

import MainTabNavigator from './MainTabNavigator';
import LoginScreen from "../screens/LoginScreen";
import DataScreen from '../screens/DataScreen';

const AuthStack = createStackNavigator({ Login: LoginScreen });

AuthStack.navigationOptions = {
    header: null,
};

export default createSwitchNavigator(
    {
        Main: MainTabNavigator,
        Auth: AuthStack,
        Data: DataScreen,
    },
    {
        initialRouteName: 'Auth',
    },
);
import React from 'react';
import { createSwitchNavigator, createStackNavigator } from 'react-navigation';

import MainTabNavigator from './MainTabNavigator';
import LoginScreen from "../screens/LoginScreen";

const AuthStack = createStackNavigator({ Login: LoginScreen });


AuthStack.navigationOptions = {
    header: null,
};

export default createSwitchNavigator(
    {
        Main: MainTabNavigator,
        Auth: AuthStack,
    },
    {
        initialRouteName: 'Auth',
    },
);
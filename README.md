# PHPObserverPattern

In your script is a class that deals with the management of a module. During a specific action, you execute one or more statements. These have only one thing in common: the fact that they are called because such action has occurred. They have been placed in the method "because we must call them and we do not know where to put them". It is interesting in this case to separate the different actions performed when such action occurs. For this, we will look at the Observer pattern side.

The principle is simple: you have an object observed and one or more object (s) observing it (s). When such action occurs, you will warn all objects that observe it. We will, for a reason of homogeneity, use the predefined interfaces of the SPL. This is a standard library that is provided automatically with PHP. It contains different classes, functions, interfaces, etc.

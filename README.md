# ee-stackmanager
Stack Manager provide a OOP's architecture to install, update, remove Nginx, PHP, MySQL.

### Directory structure
    .
    ├── ...
    ├── system                  # System files (here all supported system for stack manager will listed)
    │   ├── dabianStackManager.php  # stackManager for Dabian System
    │   └── macStackManager.php     # stackManager for Mac System
    │
    ├── stackManager.php  # StackManager abstact class that handle StackManager functionality for all supported systems.
    └── README.md
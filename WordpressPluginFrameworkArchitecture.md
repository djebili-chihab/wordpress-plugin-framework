# Introduction #

This Wiki page is dedicated to selecting an architecture for the WPF that will provide the best value-add features in terms of the following parameters.

  * **Usability** - Ease of use from the plugin developer's perspective.
  * **Maintainability** - Ease of use from the WPF developer's perspective.
  * **Performance** - Ease of use from the server's perspective.

# Architecture Options #

The current options available for the WPF architecture are listed below.

  * **Original** - Keep the current architecture of the WPF.
  * **Object-Based** - Update the WPF to utilize an architecture as described by [Issue #17](https://code.google.com/p/wordpress-plugin-framework/issues/detail?id=#17).

The current options available for the WPF installation architecture are listed below.

  * **Per-Plugin WPF** - Each plugin is required to have it's own copy of the WPF.
  * **Common WPF** - The WPF is installed in the root of the plugin's folder for all plugins to utilize.

# WPF Architecture Reviews #

The following subsections need to be filled in to provide information about the advantages and disadvantages of each architecture based on the criteria listed above.

## Original Architecture ##

> | **Criteria Type** | **Advantage / Disadvantage** | **Data** |
|:------------------|:-----------------------------|:---------|
> | Performance       | Disadvantage                 | All functionality contained within every instance. |
> | Usability         | Advantage                    | Lower barrier for entry for absolute beginners |

## Object-Based Architecture ##

> | **Criteria Type** | **Advantage / Disadvantage** | **Data** |
|:------------------|:-----------------------------|:---------|
> | Usability         | Advantage                    | Lower barrier for entry, i.e. closer resemblence to real world. |
> | Usability         | Advantage                    | Ease of understanding encourages re-use |
> | Usability         | Advantage                    | More maintainable implementation code. |
> | Usability         | Disadvantage                 | Requires (basic) knowledge of object oriented PHP. |
> | Maintainability   | Advantage                    | Easier to maintain as functionality can be split between files and classes. |


# WPF Installation Architecture Reviews #

The following subsections need to be filled in to provide information about the advantages and disadvantages of each installation architecture based on the criteria listed above.

## Per-Plugin WPF Architecture ##

> | **Criteria Type** | **Advantage / Disadvantage** | **Data** |
|:------------------|:-----------------------------|:---------|
> | Usability         | Disadvantage                 | Requires the class(es) to be uniquely named. |

## Common WPF Installation Architecture ##

> | **Criteria Type** | **Advantage / Disadvantage** | **Data** |
|:------------------|:-----------------------------|:---------|
> | Maintainability   | Disadvantage                 | Requires updates to remain backward compatible. |
> | Performance       | Advantage                    | Improved potential for active development. |
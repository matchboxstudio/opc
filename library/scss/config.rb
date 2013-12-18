# Compass is a great cross-platform tool for compiling SASS. 
# This compass config file will allow you to 
# quickly dive right in.
# For more info about compass + SASS: http://net.tutsplus.com/tutorials/html-css-techniques/using-compass-and-sass-for-css-in-your-next-project/


#########
# 1. Set this to the root of your project when deployed:
http_path = "/"

# 2. probably don't need to touch these
css_dir = "../css"
sass_dir = "./"
images_dir = "../images"
javascripts_dir = "../js"
environment = :development
relative_assets = true


# 3. You can select your preferred output style here (can be overridden via the command line):
output_style = :compressed

# 4. When you are ready to launch your WP theme comment out (3) and uncomment the line below
# output_style = :compressed

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = false

# don't touch this
preferred_syntax = :scss

require 'breakpoint'
# Learn more:
#   http://compass-style.org/docs/tutorials/configuration-reference/

module Sass::Script::Functions
  def is_breakpoint_list(breakpoint)
    result = false unless breakpoint.class == Sass::Script::List && breakpoint.separator.to_s == 'comma'
    Sass::Script::Bool.new(result)
  end
  def featureExists(feature, list)
    testList = Array.new
    listLength = list.to_a.length - 1

    # Only check if length greater than zero
    # Was throwing errors for floats (but strangely, not for ints)
    if listLength > 0
      for i in 0..listLength
        if list.value[i].class == Sass::Script::List
          subList = list.value[i].to_a.length - 1

          for j in 0..subList
            testList << list.value[i].value[j]
          end
        else
          testList << list.value[i]
        end
      end
      result = testList.include?(feature)
    else
      result = false
    end

    Sass::Script::Bool.new(result)
  end
end

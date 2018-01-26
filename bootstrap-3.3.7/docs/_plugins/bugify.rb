module Jekyll
  module BugFilter
    def bugify(input)
      upstream_map = {
        "Bootstrap" => "http://github.com/twbs/bootstrap/issues/",
        "Edge" => ["http://developer.microsoft.com/en-us/microsoft-edge/platform/issues/", "Edge issue"],
        "UserVoice" => ["http://wpdev.uservoice.com/forums/257854-microsoft-edge-developer/suggestions/", "Edge UserVoice idea"],
        "Mozilla" => ["http://bugzilla.mozilla.org/show_bug.cgi?id=", "Mozilla bug"],
        "Chromium" => ["http://bugs.chromium.org/p/chromium/issues/detail?id=", "Chromium issue"],
        "WebKit" => ["http://bugs.webkit.org/show_bug.cgi?id=", "WebKit bug"],
        "Safari" => ["http://openradar.appspot.com/", "Apple Safari Radar"],
        "Normalize" => ["http://github.com/necolas/normalize.css/issues/", "Normalize"]
      }

      upstream_map.each do |key, data|
        url = data.is_a?(Array) ? data[0] : data
        label = data.is_a?(Array) ? "#{data[1]} " : ""
        input = input.gsub(/#{key}#(\d+)/, "<a href=\"#{url}\\1\">#{label}#\\1</a>")
      end

      return input
    end
  end
end

Liquid::Template.register_filter(Jekyll::BugFilter)

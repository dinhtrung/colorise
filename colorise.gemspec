Gem::Specification.new do |s|
  # Release Specific Information
  s.version = "0.1"
  s.date = "2012-10-02"

  # Gem Details
  s.name = "colorise"
  s.authors = ["Nguyen Dinh Trung"]
  s.summary = %q{a compass extension to manipulate the colors}
  s.description = %q{a compass extension to manipulate the colors. Provide the following color scheme: colorise-luma-analogous, colorise-luma-triadic, colorise-luma-complement, colorise-analogous, colorise-triadic, colories-complement}
  s.email = "nguyendinhtrung141@gmail.com"
  s.homepage = "https://github.com/dinhtrung/colorise"

  # Gem Files
  s.files = %w(README.md)
  s.files += Dir.glob("lib/**/*.*")
  s.files += Dir.glob("stylesheets/**/*.*")
  s.files += Dir.glob("templates/**/*.*")

  # Gem Bookkeeping
  s.rubygems_version = %q{1.3.6}
  s.add_dependency("compass", [">= 0.11"])
end

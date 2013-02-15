FILES=./scss/style.scss:./style.css

all: update

update:
	sass -f -t compact --update $(FILES)

watch:
	sass --watch $(FILES)

clean:
	rm -r .sass-cache